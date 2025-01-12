<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use App\Models\Staff;
use App\Models\Booking;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
// use Validator;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use MongoDB\BSON\ObjectId;
use Carbon\Carbon;

class ScheduleController extends Controller
{
    public function showFormScheduleLists()
    {
        $schedules = (new Schedule)->setTable('schedule')->paginate(20);
        return view('Admin.schedule', compact('schedules'));
    }

    // public function showFormScheduleLists()
    // {
    //     $schedules = Schedule::paginate(20);
    //     return view('Admin.schedule', compact('schedules'));
    // }

    // public function index()
    // {
    //     // Ambil senarai kakitangan dan jadual
    //     $staffList = Staff::all(); 
    //     $schedules = Schedule::all();

    //     // Hantar data ke view
    //     return view('schedule', compact('staffList', 'schedules'));
    // }

    // // Tambah jadual baru
    public function addScheduleList(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'staff_id' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'room' => 'required|string|max:50',
            'date_time' => 'required|date_format:Y-m-d\TH:i',
            'services' => 'required|string|max:255',
            'status' => 'required|string|max:50',
            'action' => 'nullable|string|max:255',
        ]);

        // if ($validator->fails()) {
        //     return redirect()->back()->withErrors($validator)->withInput();
        // }

        $schedule = new Schedule;
        $schedule->setTable('schedule');
        $schedule->staffID = 'STF' . str_pad(rand(1, 999), 3, '0', STR_PAD_LEFT);
        $schedule->name = $request->name;
        $schedule->room_no = $request->room_no;
        $schedule->date_time = Carbon::createFromFormat('Y-m-d\TH:i', $request->date_time)->format('Y-m-d H:i:s');
        $schedule->services = $request->services;
        $schedule->status = $request->status;
        $schedule->action = $request->action;
        $schedule->save();

        Log::info('Schedule successfully added: ' . $schedule->id);

        return redirect()->route('ScheduleListForm')->with('success', 'Schedule successfully added!');
    }

    // public function store(Request $request)
    // {
    //     // Validasi data
    //     $validated = $request->validate([
    //         'staff_id' => 'required|exists:staff,_id', // MongoDB menggunakan '_id'
    //         'name' => 'required|string',
    //         'room' => 'required|string',
    //         'date_time' => 'required|date',
    //         'services' => 'required|string',
    //         'status' => 'required|string',
    //     ]);

    //     // Simpan data ke MongoDB
    //     $schedules = Schedule::all();
    //     return view('Admin.schedules', compact('schedules'));

    //     Schedule::create($validated);

    //     return redirect()->back()->with('success', 'Schedule added successfully!');
    // }

    // Kemas kini jadual
    public function updateScheduleList(Request $request)
    {

    $scheduleId = $request->input('schedule_id');

    // Dynamically set the table using setTable() if you want to use a custom table name
    $schedule = new Schedule();
    $schedule->setTable('schedule'); // Set your custom table name here

    // Find the room in the rooms_details table
    $schedule = $schedule->findOrFail($scheduleId);
   
    $schedule->name = $request->name;
    $schedule->room_no = $request->room_no;
    $schedule->date_time = Carbon::createFromFormat('Y-m-d\TH:i', $request->date_time)->format('Y-m-d H:i:s');
    $schedule->services = $request->services;
    $schedule->status = $request->status;
    $schedule->save();
    
        return redirect()->route('ScheduleListForm')->with('success', 'Schedule details updated successfully!');
    }

    // Padam jadual
//     public function deleteScheduleList(Request $request)
//     {
//         $validator = Validator::make($request->all(), [
//             'schedule_id' => 'required|string',
//         ]);

//         if ($validator->fails()) {
//             return redirect()->back()->withErrors($validator);
//         }

//         $schedule = Schedule::find($request->schedule_id);

//         if (!$schedule) {
//             return redirect()->route('ScheduleListForm')->with('error', 'Schedule not found!');
//         }

//         $schedule->delete();

//         Log::info('Schedule successfully deleted: ' . $request->schedule_id);

//         return redirect()->route('ScheduleListForm')->with('success', 'Schedule deleted successfully!');
//     }

//     public function assignSchedule(Request $request)
// {
//     $validator = Validator::make($request->all(), [
//         'staff_id' => 'required|exists:staff,_id', // Ensure staff exists in the staff collection
//         'booking_id' => 'required|exists:booking_list,_id', // Ensure booking exists in the booking collection
//     ]);

//     if ($validator->fails()) {
//         return redirect()->back()->withErrors($validator)->withInput();
//     }

//     $staff = new Staff();   
//     $staff->setTable('staff');
//     $staff = $staff->find($request->staff_id);


    
//     $booking = new Booking();   
//     $booking->setTable('booking_lists');
//     $booking = $booking->find($request->booking_id);

//     if (!$staff || !$booking) {
//         return redirect()->back()->with('error', 'Invalid staff or booking details.');
//     }


//     $schedule = new Schedule();   
//     $schedule->setTable('schedule');
//     $existingSchedule = $schedule ->where('staff_id', $staff->_id)
//         ->where(function ($query) use ($booking) {
//             $query->whereBetween('CheckIn', [$booking->CheckIn, $booking->CheckOut])
//                 ->orWhereBetween('CheckOut', [$booking->CheckIn, $booking->CheckOut])
//                 ->orWhere(function ($query) use ($booking) {
//                     $query->where('CheckIn', '<=', $booking->CheckIn)
//                         ->where('CheckOut', '>=', $booking->CheckOut);
//                 });
//         })
//         ->first();

//     if ($existingSchedule) {
//         return redirect()->back()->with('error', 'Schedule conflict detected for the selected staff.');
//     }

//     // Assign schedule
//     $scheduleId = $schedule ->insertGetId([
//         'staff_id' => $staff->_id,
//         'booking_id' => $booking->_id,
//         'RoomNo' => $booking->RoomNo,
//         'CheckIn' => $booking->CheckIn,
//         'CheckOut' => $booking->CheckOut,
//         'created_at' => now(),
//         'updated_at' => now(),
//     ]);

//     return redirect()->back()->with('success', 'Schedule assigned successfully! Schedule ID: ' . $scheduleId);
// }

// }

public function deleteScheduleList(Request $request)
{

    // Get the room_id from the request
    $scheduleId = $request->input('schedule_id');

    // Dynamically set the table using setTable() if you want to use a custom table name
    $schedule = new Schedule();
    $schedule->setTable('schedule'); // Set your custom table name here
    

    // Find the room by its MongoDB ObjectId
    $schedule = $schedule->find($scheduleId);

    if (!$schedule) {
        return redirect()->route('ScheduleListForm')->with('error', 'Schedule not found!');
    }

    // Delete the schedule
    $schedule->delete();

    // Redirect with success message
    return redirect()->route('ScheduleListForm')->with('success', 'Schedule deleted successfully!');
}
}