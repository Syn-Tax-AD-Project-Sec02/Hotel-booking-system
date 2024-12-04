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

Route::get('/admin/tables/basic', function () {
    return view('Admin.tables.basic-table');
})->name('admin.tables.basic');

Route::get('/user/register', function () {
    return view('Admin.user.register');
});

Route::get('/user/resetPassword', function () {
    return view('Admin.user.resetPassword');
});

Route::get('/login', [LoginController::class, 'showForm'])->name('login');

// Handle login submission (POST request)
Route::post('/login', [LoginController::class, 'login']);
Route::get('/admin/dashboard/index', [LoginController::class, 'adminIndex'])->name('admin.dashboard.index');

// Route to the staff dashboard
Route::get('/staff/dashboard/index', [LoginController::class, 'staffIndex'])->name('staff.dashboard.index');

Route::get('/user/ForgotPassword', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('ForgotPassword');
Route::post('/user/ForgotPassword', [ForgotPasswordController::class, 'sendResetLinkEmail']);
Route::get('/user/resetPassword/{token}', [ForgotPasswordController::class, 'showResetForm'])->name('passwordReset');
Route::post('/user/resetPassword', [ForgotPasswordController::class, 'reset'])->name('password.update');

Route::middleware('auth:admins')->group(function () {
  Route::get('/changePass', [ForgotPasswordController::class, 'changePasswordForm'])->name('changePassForm');
  Route::post('/changePass', [ForgotPasswordController::class, 'changePasswordSave'])->name('changePass');
});


Route::get('/register', [RegisterController::class, 'showForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

//Route::get('/changePass', function () {return view('Admin.user.changePass');});

Route::get('/user/profilestaff', function () {
    return view('Staff.User.profileStaff');
});



//Route::post('/staff/changePassword', [ProfileController::class, 'changePassword'])->name('staff.changePassword');




