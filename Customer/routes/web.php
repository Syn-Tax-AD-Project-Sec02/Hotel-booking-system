<?php

use App\Mail\ForgotPasswordMail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ToyyibpayController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\VerifyController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ForgotPasswordController;



Route::get('/', [RoomController::class, 'showIndex'])->name('index');

Route::get('/login', [LoginController::class, 'showForm'])->name('login');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'profileForm'])->name('profileForm');
    Route::put('/profile', [ProfileController::class, 'updateDetails'])->name('updateDetails');
    Route::get('/changePassword', [ProfileController::class, 'changePasswordForm'])->name('changePassForm');
    Route::post('/changePassword', [ProfileController::class, 'updatePasswordCust'])->name('updatePasswordCust');
    Route::get('/booking-history', [ProfileController::class, 'HistoryForm'])->name('HistoryForm');

    Route::get('/booking', [BookingController::class, 'booking'])->name('booking');
});

// Handle login submission (POST request)
Route::post('/login', [LoginController::class, 'login']);
Route::post('/register', [RegisterController::class, 'register'])->name('register');
Route::get('verify/{id}/{hash}', [VerifyController::class, 'verify'])->name('verification.verify');

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


Route::get('/booking', [BookingController::class, 'bookingForm'])->name('bookingForm');
Route::post('/storeBooking', [BookingController::class, 'storeBooking'])->name('storeBooking');
//Route::get('/booking/{room_id}/{checkin}/{checkout}/{guests}', [BookingController::class, 'showBookingForm'])->name('bookingForm');

Route::post('/check-availability', [BookingController::class, 'checkAvailability'])->name('checkRoomAvailability');

Route::get('/forgot-password', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('forgotPassword');
Route::post('/forgot-password', [ForgotPasswordController::class, 'sendResetLinkEmail']);
Route::get('/reset-password/{token}', [ForgotPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('/reset-password', [ForgotPasswordController::class, 'reset'])->name('password.update');

Route::get('/toyyibpay', [ToyyibpayController::class, 'createBill'])->name('toyyibpay');
Route::get('toyyibpay-status', [ToyyibpayController::class, 'paymentStatus'])->name('paymentStatus');
Route::post('toyyibpay-callback', [ToyyibpayController::class, 'paymentCallback'])->name('callback');
Route::get('/payment-success/{billCode}', [ToyyibpayController::class, 'paymentSuccess'])->name('payment-success');
Route::get('/payment-failed', [ToyyibpayController::class, 'paymentFailed'])->name('payment-failed');


Route::post('/contact/store', [ContactController::class, 'store'])->name('contact.store');
