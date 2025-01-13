<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Validator;
use Illuminate\Support\Facades\Log;
use MongoDB\BSON\ObjectId;
use Illuminate\Support\Facades\Mail;
use App\Mail\StaffPasswordMail;

class StaffController extends Controller
{

    public function showFormStaffLists()
    {
        $staffs = (new Staff)->setTable('staff')->paginate(20);
        return view('Admin.staff-list', compact('staffs'));
    }

    public function addStaffList(Request $request)
    {
        
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:30',
            'phone' => 'required|string|max:30',
            'address' => 'required|string|max:50',
        ]);
  
        // Save user to MongoDB
        $password = $this->generatePassword();

        $staff = new Staff;
        $staff->setTable('staff');
        $staff->role = 'staff';
        $staff->staffID = 'STF' . str_pad(rand(1, 999), 3, '0', STR_PAD_LEFT);
        $staff->email = $request->email;
        $staff->name = $request->name;
        $staff->position = $request->position;
        $staff->phone = $request->phone;
        $staff->address = $request->address;
        $staff->password = bcrypt($password);
        

        $staff->save();

        Mail::to($staff->email)->send(new StaffPasswordMail($staff, $password));

        // Log the email verification event
        Log::info('Staff details successfully added: ' . $staff->id);
        return redirect()->route('StaffListForm')->with('success', 'Staff details successfully added!');
        //return redirect()->route('login')->with('success', 'Registration successful! Please check your email for the verification link.');
        //return redirect()->route('forgotPassword');
    }

    protected function generatePassword($length = 8)
{
    $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!@#$%^&*()';
    $password = '';
    
    for ($i = 0; $i < $length; $i++) {
        $password .= $characters[rand(0, strlen($characters) - 1)];
    }

    return $password;
}

    public function updateStaffList(Request $request)
    {

    $staffId = $request->input('staff_id');

    // Dynamically set the table using setTable() if you want to use a custom table name
    $staff = new Staff();
    $staff->setTable('staff'); // Set your custom table name here

    // Find the room in the rooms_details table
    $staff = $staff->findOrFail($staffId);
   
    $staff->email = $request->email;
    $staff->name = $request->name;
    $staff->position = $request->position;
    $staff->phone = $request->phone;
    $staff->address = $request->address;
    $staff->save();
    
        return redirect()->route('StaffListForm')->with('success', 'Staff details updated successfully!');
    }


    public function deleteStaffList(Request $request)
    {
    
        // Get the room_id from the request
        $staffId = $request->input('staff_id');

        // Dynamically set the table using setTable() if you want to use a custom table name
        $staff = new Staff();
        $staff->setTable('staff'); // Set your custom table name here
        

        // Find the room by its MongoDB ObjectId
        $staff = $staff->find($staffId);

        if (!$staff) {
            return redirect()->route('StaffListForm')->with('error', 'Staff not found!');
        }

        // Delete the room
        $staff->delete();

        // Redirect with success message
        return redirect()->route('StaffListForm')->with('success', 'Staff deleted successfully!');
    }
}