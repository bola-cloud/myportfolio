<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactMessage;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class ContactMessageController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'nullable|string|max:255',
            'message' => 'required|string',
        ]);

        $data['ip'] = $request->ip();
        $data['user_agent'] = $request->userAgent();

        ContactMessage::create($data);

        // Dispatch WhatsApp notification via Wasl-X Broadcast API
        $this->sendWhatsAppBroadcast($data);

        // The template's frontend (public/template/assets/vendor/php-email-form/validate.js)
        // expects a plain text response of exactly 'OK' for AJAX submissions.
        if ($request->header('X-Requested-With') === 'XMLHttpRequest') {
            return response('OK', 200)
                ->header('Content-Type', 'text/plain');
        }

        return back()->with('success', 'Your message has been sent. Thank you!');
    }

    /**
     * Send instant WhatsApp notification with all 4 form fields formatted cleanly.
     */
    protected function sendWhatsAppBroadcast(array $data): void
    {
        $token = config('services.waslx.token');
        $url = config('services.waslx.broadcast_url', 'https://otp.wasl-x.com/api/v1/broadcast');
        $recipientConfig = config('services.waslx.recipient_number', '201555622169');

        if (empty($token)) {
            Log::info('Wasl-X WhatsApp Broadcast skipped: WASLX_BROADCAST_TOKEN is not set in .env.');
            return;
        }

        // Support single number or comma-separated numbers
        $numbers = array_values(array_filter(array_map('trim', explode(',', (string) $recipientConfig))));
        if (empty($numbers)) {
            $numbers = ['201555622169'];
        }

        $now = now()->setTimezone('Africa/Cairo')->format('Y-m-d h:i A');
        $name = trim($data['name']);
        $email = trim($data['email']);
        $subject = !empty($data['subject']) ? trim($data['subject']) : 'General Technical Inquiry';
        $userMessage = trim($data['message']);
        $ip = $data['ip'] ?? 'N/A';

        // 4 Form fields formatted cleanly and professionally with WhatsApp markdown
        $messageLines = [
            "🚀 *New Portfolio Direct Inquiry*",
            "━━━━━━━━━━━━━━━━━━━━━━",
            "👤 *Client Name:* " . $name,
            "📧 *Email:* " . $email,
            "📌 *Subject / Scope:* " . $subject,
            "━━━━━━━━━━━━━━━━━━━━━━",
            "📝 *Technical Message / Requirements:*",
            $userMessage,
            "━━━━━━━━━━━━━━━━━━━━━━",
            "⏰ *Time:* " . $now . " (Cairo)",
            "🌐 *IP:* " . $ip,
            "💼 _Notification from Bola Naguib Portfolio Hub_"
        ];

        $formattedMessage = implode("\n", $messageLines);

        try {
            $response = Http::timeout(10)
                ->withToken($token)
                ->acceptJson()
                ->post($url, [
                    'numbers' => $numbers,
                    'message' => $formattedMessage,
                ]);

            if ($response->successful()) {
                Log::info('Wasl-X WhatsApp Broadcast sent successfully to: ' . implode(', ', $numbers));
            } else {
                Log::warning('Wasl-X WhatsApp Broadcast API returned status ' . $response->status(), [
                    'response' => $response->json() ?? $response->body(),
                ]);
            }
        } catch (\Throwable $e) {
            Log::error('Wasl-X WhatsApp Broadcast dispatch failed: ' . $e->getMessage());
        }
    }
}
