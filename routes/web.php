<?php

use App\Http\Controllers\AutoreplayController;
use App\Http\Controllers\BroadcastController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ForgotpasswordController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SendMessageController;
use App\Http\Controllers\WebhookController;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


















Route::get('/', function () {
    return view('login.login', [
        'title' => 'Login'
    ]);
});




Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);


Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/profile', [ProfileController::class, 'index'])->middleware('auth');

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
Route::get('/contact', [ContactController::class, 'index'])->middleware('auth');
Route::get('/broadcast', [BroadcastController::class, 'index'])->middleware('auth');
Route::get('/replay', [AutoreplayController::class, 'index'])->middleware('auth');

Route::get('/send-message', [SendMessageController::class, 'index'])->middleware('auth');
Route::get('/webhook', [WebhookController::class, 'index'])->middleware('auth');
Route::get('/whatsapp-menu', [MenuController::class, 'index'])->middleware('auth');
Route::get('/api', [ApiController::class, 'index'])->middleware('auth');
