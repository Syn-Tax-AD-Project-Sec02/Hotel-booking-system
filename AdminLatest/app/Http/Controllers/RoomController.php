<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Room;

use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;


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
            'Facilities' => 'nullable|array', // Allow multiple facilities
            'Rate' => 'required|string|max:15',
        ]);

         // Handle image upload
         $imagePaths = [];
        if ($request->hasFile('Image')) {
            foreach ($request->file('Image') as $image) {
                $path = $image->store('room_images', 'public'); // Save each image
                $imagePaths[] = $path; // Collect the paths
            } // Collect the paths
        }

        // Save user to MongoDB
        $room = new Room;
        $room->ImagePath = json_encode($imagePaths);
        $room->setTable('rooms_details');
        $room->TypeRoom = $request->TypeRoom;
        $room->Facilities = json_encode($request->facilities);
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
    $imagePaths = json_decode($room->ImagePath, true) ?? [];

    // Handle new image uploads
    if ($request->hasFile('Image')) {
        foreach ($request->file('Image') as $image) {
            $path = $image->store('room_images', 'public'); // Store the new image
            $imagePaths[] = $path; // Add the new image path to the existing ones
        }
    }

        $room->TypeRoom = $request->TypeRoom;
        $room->Facilities = json_encode($request->facilities);
        $room->Rate = $request->Rate;
        $room->ImagePath = json_encode($imagePaths); // Save all image paths as JSON
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


    public function deleteImage(Request $request)
    {
        // Get roomId and imageIndex from the form submission
        $roomId = $request->input('room_id');
        $imageIndex = $request->input('imageIndex');

        // Find the room by ID, using the table name defined manually
        $room = new Room();
        $room->setTable('rooms_details'); // Ensures the correct table is being used
        $room = $room->findOrFail($roomId); // Retrieve the room record

        // Decode the existing image paths
        $imagePaths = json_decode($room->ImagePath, true);

        // Check if the image index is valid
        if (isset($imagePaths[$imageIndex])) {
            // Get the image path
            $imagePath = $imagePaths[$imageIndex];

            // Delete the image from storage
            Storage::disk('public')->delete($imagePath);

            // Remove the image path from the array
            unset($imagePaths[$imageIndex]);

            // Reindex the array (to fix any gaps in keys)
            $imagePaths = array_values($imagePaths);

            // Update the ImagePath field with the new array
            $room->ImagePath = json_encode($imagePaths);
            $room->save();

            // Log and redirect
            Log::info('Image deleted from room ' . $roomId);
            return redirect()->route('RoomDetailsForm')->with('success', 'Image deleted successfully!');
        }

        return redirect()->route('RoomDetailsForm')->with('error', 'Image not found!');
    }


    public function showFormRoomLists()
    {
        $rooms = (new Room)->setTable('room_lists')->paginate(6);
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
        $room->setTable('room_lists');
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
    $room->setTable('room_lists'); // Set your custom table name here

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
        $room->setTable('room_lists'); // Custom table name


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

    public function filterRoomStatus(Request $request)
{

    $status = $request->input('status');
    // Create an instance of Room model and set the table dynamically
    $room = new Room();
    $room->setTable('room_lists');  // Specify the collection/table you want to query

    if ($status == 'all') {
        // Fetch all rooms from the specific collection
        $rooms = $room->get();
    } else {
        // Fetch rooms from the specific collection based on status
        $rooms = $room->where('Status', $status)->get();
    }

    Log::info("Rooms found:", $rooms->toArray());
    return response()->json(['rooms' => $rooms]);
}

public function filterByDate(Request $request)
{
    try {
        // Step 1: Parse the input date
        $date = Carbon::parse($request->input('date'))->format('Y-m-d');
        Log::info('Selected Date:', ['date' => $date]);

        // Step 2: Fetch rooms that are booked on the selected date
        $booking = new Booking();
        $booking->setTable('booking_list');

        $bookedRoomNumbers = $booking->where([
            ['CheckIn', '<=', $date],
            ['CheckOut', '>=', $date],
        ])->pluck('RoomNo')->toArray();

        Log::info('Booked Room Numbers:', ['bookedRoomNumbers' => $bookedRoomNumbers]);

        // Step 3: Fetch available rooms not in the booked list
        $room = new Room();
        $room->setTable('room_lists');

        $availableRooms = $room->whereNotIn('RoomNo', $bookedRoomNumbers)->get();
        Log::info('Available Rooms:', $availableRooms->toArray());

        // Step 4: Loop through rooms and set the status dynamically
        foreach ($availableRooms as $room) {
            // Set the status as 'Booked' if the room number is in the booked list, otherwise 'Available'
            $room->Status = in_array($room->RoomNo, $bookedRoomNumbers) ? 'Booked' : 'Available';
        }


        return response()->json(['rooms' => $availableRooms]);
    } catch (\Exception $e) {
        Log::error('Error while fetching room data:', ['error' => $e->getMessage()]);
        return response()->json(['error' => 'An error occurred while fetching room data.'], 500);
    }

}

public function filterRooms(Request $request)
{
    try {
        $date = Carbon::parse($request->input('date'))->format('Y-m-d');  // Get selected date
        $status = $request->input('status');  // Get selected status ('Booked' or 'Available')

        // Step 1: Fetch booked rooms based on the selected date
        $booking = new Booking();
        $booking->setTable('booking_list');

        // Get room numbers booked on the selected date
        $bookedRoomNumbers = $booking->where([
            ['CheckIn', '<=', $date],
            ['CheckOut', '>=', $date],
        ])->pluck('RoomNo')->toArray();

        // Step 2: Fetch rooms based on status and date
        $room = new Room();
        $room->setTable('room_lists');

        // Create the query based on the status and booked rooms
        $query = $room->newQuery();

        // Step 3: Assign status based on the booking data
        // Check if the status is 'Booked' or 'Available'
        if ($status === 'Booked') {
            // Filter rooms that are booked on the selected date
            $query->whereIn('RoomNo', $bookedRoomNumbers);
        } elseif ($status === 'Available') {
            // Filter rooms that are not booked on the selected date
            $query->whereNotIn('RoomNo', $bookedRoomNumbers);
        }

        // Step 4: Fetch the rooms
        $rooms = $query->get();

        // Step 5: Assign status dynamically to each room
        foreach ($rooms as $room) {
            // Automatically set status to 'Booked' or 'Available' based on the date
            $room->Status = in_array($room->RoomNo, $bookedRoomNumbers) ? 'Booked' : 'Available';
        }


        return response()->json(['rooms' => $rooms]);
    } catch (\Exception $e) {
        return response()->json(['error' => 'An error occurred while filtering rooms.'], 500);
    }
}


}
