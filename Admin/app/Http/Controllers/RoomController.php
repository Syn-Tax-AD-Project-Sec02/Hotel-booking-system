<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Validator;
use Illuminate\Support\Facades\Log;
use MongoDB\BSON\ObjectId;

class RoomController extends Controller
{
    public function showFormRoomDetails()
    {
        $rooms = Room::from('rooms_details')->paginate(6);
        return view('Admin.Room.RoomDetails', compact('rooms'));
    }

    public function addRoomDetails(Request $request)
    {
        
        $validator = Validator::make($request->all(), [
            'Image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'TypeRoom' => 'required|string|max:255',
            'Facilities' => 'required|string|max:255',
            'Rate' => 'required|string|max:15',
        ]);
        
         // Handle image upload
        $imagePath = null;
        if ($request->hasFile('Image')) {
            $imagePath = $request->file('Image')->store('room_images', 'public');
        }

        // Save user to MongoDB
        $room = new Room;
        $room->ImagePath = $imagePath; 
        $room->setTable('rooms_details');
        $room->TypeRoom = $request->TypeRoom;
        $room->Facilities = $request->Facilities;
        $room->Rate = $request->Rate;
        $room->save();

        // Log the email verification event
        Log::info('Room details successfully added: ' . $room->id);
        return redirect()->route('RoomDetailsForm')->with('success', 'Room details successfully added!');
        //return redirect()->route('login')->with('success', 'Registration successful! Please check your email for the verification link.');
        //return redirect()->route('forgotPassword');
    }

    public function updateRoomDetails(Request $request)
{

    $roomId = $request->input('room_id');

    // Dynamically set the table using setTable() if you want to use a custom table name
    $room = new Room();
    $room->setTable('rooms_details'); // Set your custom table name here

    // Find the room in the rooms_details table
    $room = $room->findOrFail($roomId);
    if($request->hasFile('Image')){
        if($room->ImagePath && file_exist(storage_path('app/public' . $room->ImagePath))){
            unlink(storage_path('app/public/' . $room->ImagePath));
        }
        $room->ImagePath = $request->file('Image')->store('room_images', 'public');
    }

        $room->TypeRoom = $request->TypeRoom;
        $room->Facilities = $request->Facilities;
        $room->Rate = $request->Rate;
        $room->save();
    
        return redirect()->route('RoomDetailsForm')->with('success', 'Room details updated successfully!');
    }


    public function deleteRoomDetails(Request $request)
    {
    
        // Get the room_id from the request
        $roomId = $request->input('room_id');

        // Set the custom table for MongoDB
        $room = new Room();
        $room->setTable('rooms_details'); // Custom table name

        // Find the room by its MongoDB ObjectId
        $room = $room->find($roomId);

        if (!$room) {
            return redirect()->route('RoomDetailsForm')->with('error', 'Room not found!');
        }

        // Delete the room
        $room->delete();

        // Redirect with success message
        return redirect()->route('RoomDetailsForm')->with('success', 'Room deleted successfully!');
    }
}