<?php

use App\Http\Controllers\AutoreplayController;
use App\Http\Controllers\BroadcastController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ForgotpasswordController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

















// login
Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);


Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);
Route::get('/broadcast', [BroadcastController::class, 'index']);
Route::get('/replay', [AutoreplayController::class, 'index']);





//route halaman kirim pesan whatsapp->blm dibuat controller nya
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
