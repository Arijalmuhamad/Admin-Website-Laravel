<?php

use App\Http\Controllers\AutoreplayController;
use App\Http\Controllers\BroadcastController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ForgotpasswordController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;















Route::get('dashboard', [DashboardController::class, 'index']);

// wpu login
Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);





Route::get('/broadcast', [BroadcastController::class, 'index']);
//  menu auto replay
Route::get('/replay', [AutoreplayController::class, 'index']);
// menu contact
Route::get('/contact', [ContactController::class, 'index']);

// route halaman login
Route::get('/login', [LoginController::class, 'index']);
// route halaman register
Route::get('/register', [RegisterController::class, 'index']);
// route halaman lupa password
Route::get('/forgot-password', [ForgotpasswordController::class, 'index']);



//route halaman kirim pesan whatsapp
Route::get('/send-message', function () {
    return view('whatsapp-send', [
        'title' => 'Send Message'
    ]);
});

Route::get('/webhook', function () {
    return view('whatsapp-webhook', [
        'title' => 'Webhook'
    ]);
});

Route::get('/whatsapp-menu', function () {
    return view('whatsapp-menu', [
        'title' => 'Menu Whatsapp'
    ]);
});

Route::get('/api', function () {
    return view('api', [
        'title' => 'Rest API'
    ]);
});
