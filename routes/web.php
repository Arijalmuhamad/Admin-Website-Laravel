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
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);


Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
Route::get('/contact', [ContactController::class, 'index'])->middleware('auth');
Route::get('/broadcast', [BroadcastController::class, 'index'])->middleware('auth');
Route::get('/replay', [AutoreplayController::class, 'index'])->middleware('auth');





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
