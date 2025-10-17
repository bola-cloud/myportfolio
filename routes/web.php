<?php

use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::group([
    'prefix' => LaravelLocalization::setLocale(), // Set the language prefix correctly
    'middleware' => [
        'auth:sanctum',
        config('jetstream.auth_session'),
        'verified',
    ]
], function () {
    Route::get('/dashboard', [\App\Http\Controllers\Admin\Dashboard::class, 'index'])->name('dashboard');
});

// Public homepage route (renders the portfolio home view)
Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Portfolio detail routes
Route::get('/portfolio/{slug}', [\App\Http\Controllers\PortfolioController::class, 'show'])->name('portfolio.detail');

// Contact form route
Route::post('/contact', [\App\Http\Controllers\ContactMessageController::class, 'store'])->name('contact.store');
