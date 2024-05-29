<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('auth.register');
});

Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register')->middleware('guest');
Route::post('register', [RegisterController::class, 'register'])->middleware('guest');

Route::get('login', [LoginController::class, 'showLoginForm'])->name('login')->middleware('guest');
Route::post('login', [LoginController::class, 'login'])->middleware('guest');

Route::post('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('auth');