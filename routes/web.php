<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');

// Handle login request
Route::post('login', [AuthController::class, 'login'])->name('login.submit');

Route::post('/dashboard', [DashboardController::class,'login'])->name('dashboard');

// Handle logout
Route::post('logout', [AuthController::class, 'logout'])->name('logout');
// Handle the login form submission


Route::get('/password/request', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');

