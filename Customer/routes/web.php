<?php

use App\Mail\ForgotPasswordMail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\VerifyController;




Route::get('/', function () {
    $rooms = [
        [
            'title' => 'Standard Room',
            'image' => 'living-suite.jpg',
            'price' => '140.00',
            'description' => 'Relax in this expansive room, designed for your comfort.',
        ],
        [
            'title' => 'Deluxe Room',
            'image' => 'living-suite.jpg',
            'price' => '180.00',
            'description' => 'A luxurious room with modern amenities and style.',
        ],
        [
            'title' => 'Twin Deluxe Room',
            'image' => 'living-suite.jpg',
            'price' => '200.00',
            'description' => 'Perfect for friends or couples needing extra space.',
        ],
        // Add 4 more entries as needed
        ['title' => 'Executive Suite', 'image' => 'living-suite.jpg', 'price' => '250.00', 'description' => 'Spacious suite with executive facilities.'],
        ['title' => 'Family Suite', 'image' => 'living-suite.jpg', 'price' => '300.00', 'description' => 'Ideal for families seeking comfort and relaxation.'],
        ['title' => 'Studio Room', 'image' => 'living-suite.jpg', 'price' => '150.00', 'description' => 'A compact room for budget-conscious travelers.'],
        ['title' => 'Presidential Suite', 'image' => 'living-suite.jpg', 'price' => '400.00', 'description' => 'Top-tier luxury for an unparalleled experience.'],
    ];

    return view('index', ['rooms' => $rooms]);
});



Route::get('/login', [LoginController::class, 'showForm'])->name('login');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'profileForm'])->name('profileForm');
    Route::put('/profile', [ProfileController::class, 'updateDetails'])->name('updateDetails');
    Route::get('/changePassword', [ProfileController::class, 'changePasswordForm'])->name('changePassForm');
    Route::post('/changePassword', [ProfileController::class, 'updatePasswordCust'])->name('updatePasswordCust');
});

// Handle login submission (POST request)
Route::post('/login', [LoginController::class, 'login']);
Route::post('/register', [RegisterController::class, 'register'])->name('register');
Route::get('verify/{id}/{hash}', [VerifyController::class, 'verify'])->name('verification.verify');

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


Route::get('/booking', function () {
    return view('booking');
})->name('booking');

Route::get('/forgot-password', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('forgotPassword');
Route::post('/forgot-password', [ForgotPasswordController::class, 'sendResetLinkEmail']);
Route::get('/reset-password/{token}', [ForgotPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('/reset-password', [ForgotPasswordController::class, 'reset'])->name('password.update');
