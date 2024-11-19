<?php

use App\Mail\ForgotPasswordMail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\ForgotPasswordController;



Route::get('/', function () {
    return view('Admin.user.login');
});



Route::get('/user/register', function () {
    return view('Admin.user.register');
});

Route::get('/user/resetPassword', function () {
    return view('Admin.user.resetPassword');
});

Route::get('/user/resetPassword/{token}', [ForgotPasswordController::class, 'showResetForm'])->name('passwordReset');
Route::post('/user/resetPassword', [ForgotPasswordController::class, 'reset'])->name('password.update');


Route::get('/login', [LoginController::class, 'showForm'])->name('login');

// Handle login submission (POST request)
Route::post('/login', [LoginController::class, 'login']);
Route::get('/admin/dashboard/index', [LoginController::class, 'adminIndex'])->name('admin.dashboard.index');

// Route to the staff dashboard
Route::get('/staff/dashboard/index', [LoginController::class, 'staffIndex'])->name('staff.dashboard.index');

Route::get('/user/ForgotPassword', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('ForgotPassword');
Route::post('/user/ForgotPassword', [ForgotPasswordController::class, 'sendResetLinkEmail']);

Route::get('/register', [RegisterController::class, 'showForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

Route::get('/user/profile', function () {
    return view('Admin.user.profile');
});



