<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactMessage;

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

        // The template's frontend (public/template/assets/vendor/php-email-form/validate.js)
        // expects a plain text response of exactly 'OK' for AJAX submissions.
        // That script sends the header 'X-Requested-With: XMLHttpRequest', so detect
        // that and return the exact string to let the client-side script mark success.
        if ($request->header('X-Requested-With') === 'XMLHttpRequest') {
            return response('OK', 200)
                ->header('Content-Type', 'text/plain');
        }

        return back()->with('success', 'Your message has been sent. Thank you!');
    }
}
