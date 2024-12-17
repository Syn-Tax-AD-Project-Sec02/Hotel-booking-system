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
        $rooms = Room::from('rooms_details')->paginate(10);
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
        if($room->ImagePath && file_exists(storage_path('app/public' . $room->ImagePath))){
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

    public function showFormRoomLists()
    {
        $rooms = (new Room)->setTable('rooms_lists')->paginate(6);
        return view('Admin.Room.RoomLists', compact('rooms'));
    }

    public function addRoomList(Request $request)
    {
        
        $validator = Validator::make($request->all(), [
            'RoomNo' => 'required|int|unique:rooms_details|max:5',
            'TypeRoom' => 'required|string|max:30',
            'RoomFloor' => 'required|string|max:30',
            'RoomBlock' => 'required|string|max:15',
            'Status' => 'required|string|max:15',
        ]);
        
        $collectionName = 'rooms_lists';  // Set this dynamically based on your requirements

    // Make sure to use the correct collection
        $existingRoom = Room::from($collectionName)->where('RoomNo', $request->RoomNo)->first();
        if ($existingRoom) {
            // If the RoomNo already exists, return an error message
            return back()->with('error', 'Room No already exists!');
        }
      
        // Save user to MongoDB
        $room = new Room;
        $room->setTable('rooms_lists');
        $room->RoomNo = $request->RoomNo;
        $room->TypeRoom = $request->TypeRoom;
        $room->RoomFloor = $request->RoomFloor;
        $room->RoomBlock = $request->RoomBlock;
        $room->Status = $request->Status;
        $room->save();

        // Log the email verification event
        Log::info('Room details successfully added: ' . $room->id);
        return redirect()->route('RoomListsForm')->with('success', 'Room details successfully added!');
        //return redirect()->route('login')->with('success', 'Registration successful! Please check your email for the verification link.');
        //return redirect()->route('forgotPassword');
    }

    public function updateRoomList(Request $request)
    {

    $roomId = $request->input('room_id');

    // Dynamically set the table using setTable() if you want to use a custom table name
    $room = new Room();
    $room->setTable('rooms_lists'); // Set your custom table name here

    // Find the room in the rooms_details table
    $room = $room->findOrFail($roomId);
   
   
    $room->RoomNo = $request->RoomNo;
    $room->TypeRoom = $request->TypeRoom;
    $room->RoomFloor = $request->RoomFloor;
    $room->RoomBlock = $request->RoomBlock;
    $room->Status = $request->Status;
    $room->save();
    
        return redirect()->route('RoomListsForm')->with('success', 'Room details updated successfully!');
    }


    public function deleteRoomList(Request $request)
    {
    
        // Get the room_id from the request
        $roomId = $request->input('room_id');
        

        // Set the custom table for MongoDB
        $room = new Room();
        $room->setTable('rooms_lists'); // Custom table name
        

        // Find the room by its MongoDB ObjectId
        $room = $room->findOrFail($roomId);

        if (!$room) {
            return redirect()->route('RoomListsForm')->with('error', 'Room not found!');
        }

        

        // Delete the room
        $room->delete();

        // Redirect with success message
        return redirect()->route('RoomListsForm')->with('success', 'Room deleted successfully!');
    }
}