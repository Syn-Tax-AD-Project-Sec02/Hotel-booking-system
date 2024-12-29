<?php

use App\Mail\ForgotPasswordMail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\StaffController;

Route::get('/', function () {
    return view('Admin.user.login');
});


Route::get('/user/register', function () {
    return view('Admin.user.register');
});

Route::get('/user/resetPassword', function () {
    return view('Admin.user.resetPassword');
});

Route::get('/login', [LoginController::class, 'showForm'])->name('login');

// Handle login submission (POST request)
Route::post('/login', [LoginController::class, 'login']);
Route::get('/admin/dashboard', [LoginController::class, 'adminIndex'])->name('admin.dashboard.index');

// Route to the staff dashboard
Route::get('/staff/dashboard', [LoginController::class, 'staffIndex'])->name('staff.dashboard.index');

Route::get('/user/ForgotPassword', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('ForgotPassword');
Route::post('/user/ForgotPassword', [ForgotPasswordController::class, 'sendResetLinkEmail']);
Route::get('/user/resetPassword/{token}', [ForgotPasswordController::class, 'showResetForm'])->name('passwordReset');
Route::post('/user/resetPassword', [ForgotPasswordController::class, 'reset'])->name('password.update');

Route::middleware('auth:admins')->group(function () {
  Route::get('/changePass', [ForgotPasswordController::class, 'changePasswordForm'])->name('changePassForm');
  Route::post('/changePass', [ForgotPasswordController::class, 'changePasswordAdmin'])->name('changePass');
});

Route::middleware('auth:staff')->group(function () {
    Route::get('/profile', [ProfileController::class, 'profileStaffForm'])->name('profileStaffForm');
    Route::post('/profile', [ProfileController::class, 'changePasswordStaff'])->name('changePassStaff');

    Route::put('/profile', [ProfileController::class, 'updateStaffDetails'])->name('updateStaffDetails');
  });


Route::get('/register', [RegisterController::class, 'showForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

Route::get('/room-details', [RoomController::class, 'showFormRoomDetails'])->name('RoomDetailsForm');
Route::post('/room-details', [RoomController::class, 'addRoomDetails']);
Route::put('/room-details', [RoomController::class, 'updateRoomDetails'])->name('updateRoomDetails');
Route::delete('/room-details', [RoomController::class, 'deleteRoomDetails'])->name('deleteRoomDetails');
Route::delete('/room-details-image', [RoomController::class, 'deleteImage'])->name('deleteImage');

Route::get('/room-lists', [RoomController::class, 'showFormRoomLists'])->name('RoomListsForm');
Route::post('/room-lists', [RoomController::class, 'addRoomList']);
Route::put('/room-lists', [RoomController::class, 'updateRoomList'])->name('updateRoomList');
Route::delete('/room-lists', [RoomController::class, 'deleteRoomList'])->name('deleteRoomList');
Route::post('/filterRoomStatus', [RoomController::class, 'filterRoomStatus'])->name('filterRoomStatus');
Route::get('/filterRoomDate', [RoomController::class, 'filterByDate'])->name('filterRoomByDate');
Route::post('/filter-rooms', [RoomController::class, 'filterRooms'])->name('filterRooms');

Route::get('/booking', [BookingController::class, 'showBookingList'])->name('bookingListsForm');
Route::post('/booking', [BookingController::class, 'addBookingList']);
Route::put('/booking', [BookingController::class, 'updateBookingList'])->name('updateBookingList');
Route::delete('/booking', [BookingController::class, 'deleteBookingList'])->name('deleteBookingList');
Route::post('/getRoomsByType', [BookingController::class, 'getRoomsByType'])->name('getRoomsByType');


Route::get('/staff-list', [StaffController::class, 'showFormStaffLists'])->name('StaffListForm');
Route::post('/staff-list', [StaffController::class, 'addStaffList']);
Route::put('/staff-list', [StaffController::class, 'updateStaffList'])->name('updateStaffList');
Route::delete('/staff-list', [StaffController::class, 'deleteStaffList'])->name('deleteStaffList');






//Route::get('/room-details', function(){
 // return view('Admin.Room.RoomDetails');
//});


//Route::get('/changePass', function () {return view('Admin.user.changePass');});

//Route::get('/user/profilestaff', function () {
 //   return view('Staff.User.profileStaff');
//});

//Route::post('/staff/changePassword', [ProfileController::class, 'changePassword'])->name('staff.changePassword');




