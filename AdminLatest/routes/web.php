<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ForgotPasswordController;

Route::get('/', function () {
    return view('Admin.user.login');
});

Route::get('/user/resetPassword', function () {
    return view('Admin.user.resetPassword');
});

Route::get('/login', [LoginController::class, 'showForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

// Handle login submission (POST request)

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

Route::get('/staff-room-details', [RoomController::class, 'showStaffFormRoomDetails'])->name('RoomStaffDetailsForm');

Route::get('/room-lists', [RoomController::class, 'showFormRoomLists'])->name('RoomListsForm');
Route::post('/room-lists', [RoomController::class, 'addRoomList']);
Route::put('/room-lists', [RoomController::class, 'updateRoomList'])->name('updateRoomList');
Route::delete('/room-lists', [RoomController::class, 'deleteRoomList'])->name('deleteRoomList');
Route::post('/filterRoomStatus', [RoomController::class, 'filterRoomStatus'])->name('filterRoomStatus');
Route::get('/filterRoomDate', [RoomController::class, 'filterByDate'])->name('filterRoomByDate');
Route::post('/filter-rooms', [RoomController::class, 'filterRooms'])->name('filterRooms');

Route::get('/staff/room-lists', [RoomController::class, 'showStaffFormRoomLists'])->name('RoomStaffListsForm');

Route::get('/booking', [BookingController::class, 'showBookingList'])->name('bookingListsForm');
Route::post('/booking', [BookingController::class, 'addBookingList']);
Route::put('/booking', [BookingController::class, 'updateBookingList'])->name('updateBookingList');
Route::delete('/booking', [BookingController::class, 'deleteBookingList'])->name('deleteBookingList');
Route::post('/getRoomsByType', [BookingController::class, 'getRoomsByType'])->name('getRoomsByType');

Route::get('/staff-booking', [BookingController::class, 'showStaffBookingList'])->name('bookingStaffListsForm');
Route::put('/staff-booking', [BookingController::class, 'updateStaffBookingList'])->name('updateStaffBookingList');
Route::delete('/staff-booking', [BookingController::class, 'deleteStaffBookingList'])->name('deleteStaffBookingList');
Route::post('/staff-booking', [BookingController::class, 'addStaffBookingList']);

Route::get('/guest-list', [BookingController::class, 'showGuestList'])->name('GuestListForm');

Route::get('/staff/guest-list', [BookingController::class, 'showStaffGuestList'])->name('GuestStaffListForm');

Route::get('/staff-list', [StaffController::class, 'showFormStaffLists'])->name('StaffListForm');
Route::post('/staff-list', [StaffController::class, 'addStaffList']);
Route::put('/staff-list', [StaffController::class, 'updateStaffList'])->name('updateStaffList');
Route::delete('/staff-list', [StaffController::class, 'deleteStaffList'])->name('deleteStaffList');

Route::get('/schedule', [ScheduleController::class, 'showFormScheduleLists'])->name('ScheduleListForm');
Route::post('/schedule', [ScheduleController::class, 'addScheduleList']);
Route::put('/schedule', [ScheduleController::class, 'updateScheduleList'])->name('updateScheduleList');
Route::delete('/schedule', [ScheduleController::class, 'deleteScheduleList'])->name('deleteScheduleList');

Route::get('/staff/schedule', [ScheduleController::class, 'showStaffFormScheduleLists'])->name('ScheduleStaffListForm');

Route::get('/generate-report', [ReportController::class, 'showFormGenerateReport'])->name('generateReport');
Route::post('/generate-pdf', [ReportController::class, 'generatePDF'])->name('generatePDF');

Route::get('/contact/index', [ContactController::class, 'index'])->name('contact.index');

Route::get('/staff/contact/index', [ContactController::class, 'staffindex'])->name('staff.contact.index');

Route::post('/get-staff', [ScheduleController::class, 'getStaff'])->name('get.staff');
