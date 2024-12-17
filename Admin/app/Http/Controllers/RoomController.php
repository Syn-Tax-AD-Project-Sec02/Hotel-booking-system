<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\RoomList;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use MongoDB\BSON\ObjectId;
use Illuminate\Support\Facades\Validator;


class RoomController extends Controller
{
    // Show the room list (for /room-list route)
    public function showRoomList()
    {
        $rooms = RoomList::all();  // Fetch rooms from MongoDB

        return view('Admin.Room.RoomList', compact('rooms'));  // Pass the variable to the view
    }

    // Show the room details form (for /room/details route)
    public function showFormRoomDetails()
    {
        $rooms = Room::paginate(6); // Example, you can change the number of rooms displayed per page
        return view('Admin.Room.RoomDetails', compact('rooms'));
    }

    // public function addRoomDetails(Request $request)
    // {

    //     $validator = Validator::make($request->all(), [
    //         'Image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    //         'TypeRoom' => 'required|string|max:255',
    //         'Facilities' => 'required|string|max:255',
    //         'Rate' => 'required|string|max:15',
    //     ]);

    //      // Handle image upload
    //     $imagePath = null;
    //     if ($request->hasFile('Image')) {
    //         $imagePath = $request->file('Image')->store('room_images', 'public');
    //     }

    //     // Save user to MongoDB
    //     $room = new Room;
    //     $room->ImagePath = $imagePath;
    //     $room->setTable('rooms_details');
    //     $room->TypeRoom = $request->TypeRoom;
    //     $room->Facilities = $request->Facilities;
    //     $room->Rate = $request->Rate;
    //     $room->save();

    //     // Log the email verification event
    //     Log::info('Room details successfully added: ' . $room->id);
    //     return redirect()->route('RoomDetailsForm')->with('success', 'Room details successfully added!');
    //     //return redirect()->route('login')->with('success', 'Registration successful! Please check your email for the verification link.');
    //     //return redirect()->route('forgotPassword');
    // }
        public function addRoomDetails(Request $request)
        {
            $validator = Validator::make($request->all(), [
                'Images' => 'nullable|array',
                'Images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'TypeRoom' => 'required|string|max:255',
                'Facilities' => 'required|string|max:255',
                'Rate' => 'required|string|max:15',
            ]);

            // Handle multiple image uploads
            $imagePaths = [];
            if ($request->hasFile('Images')) {
                foreach ($request->file('Images') as $image) {
                    $imagePaths[] = $image->store('room_images', 'public');
                }
            }

            // Save room details to MongoDB
            $room = new Room;
            $room->setTable('rooms_details');
            $room->TypeRoom = $request->TypeRoom;
            $room->Facilities = $request->Facilities;
            $room->Rate = $request->Rate;
            $room->ImagePaths = json_encode($imagePaths);  // Save multiple image paths as a JSON array
            $room->save();

            // Log the event
            Log::info('Room details successfully added with images: ' . $room->id);
            return redirect()->route('RoomDetailsForm')->with('success', 'Room details with images successfully added!');
        }


//     public function updateRoomDetails(Request $request)
// {

//     $roomId = $request->input('room_id');

//     // Dynamically set the table using setTable() if you want to use a custom table name
//     $room = new Room();
//     $room->setTable('rooms_details'); // Set your custom table name here

//     // Find the room in the rooms_details table
//     $room = $room->findOrFail($roomId);
//     if($request->hasFile('Image')){
//         if($room->ImagePath && file_exist(storage_path('app/public' . $room->ImagePath))){
//             unlink(storage_path('app/public/' . $room->ImagePath));
//         }
//         $room->ImagePath = $request->file('Image')->store('room_images', 'public');
//     }

//         $room->TypeRoom = $request->TypeRoom;
//         $room->Facilities = $request->Facilities;
//         $room->Rate = $request->Rate;
//         $room->save();

//         return redirect()->route('RoomDetailsForm')->with('success', 'Room details updated successfully!');
//     }

    public function updateRoomDetails(Request $request)
    {
        $roomId = $request->input('room_id');
        $room = Room::findOrFail($roomId);

        // Handle multiple image upload
        if ($request->hasFile('Images')) {
            // Delete old images if necessary
            foreach (json_decode($room->ImagePaths) as $oldImagePath) {
                if (file_exists(storage_path('app/public/' . $oldImagePath))) {
                    unlink(storage_path('app/public/' . $oldImagePath));
                }
            }

            $newImagePaths = [];
            foreach ($request->file('Images') as $image) {
                $newImagePaths[] = $image->store('room_images', 'public');
            }

            $room->ImagePaths = json_encode($newImagePaths);
        }

        $room->TypeRoom = $request->TypeRoom;
        $room->Facilities = $request->Facilities;
        $room->Rate = $request->Rate;
        $room->save();

        return redirect()->route('RoomDetailsForm')->with('success', 'Room details updated with images successfully!');
    }

    public function deleteRoomDetails(Request $request)
    // Add new room details (for POST /room/details route)
    public function addRoomDetails(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'Image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'TypeRoom' => 'required|string|max:255',
            'Facilities' => 'required|string|max:255',
            'Rate' => 'required|string|max:15',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Handle image upload
        $imagePath = null;
        if ($request->hasFile('Image')) {
            $imagePath = $request->file('Image')->store('room_images', 'public');
        }

        // Save room details to MongoDB or your database
        $room = new Room();
        $room->setTable('rooms_details');
        $room->ImagePath = $imagePath;
        $room->TypeRoom = $request->TypeRoom;
        $room->Facilities = $request->Facilities;
        $room->Rate = $request->Rate;
        $room->save();

        Log::info('Room details successfully added: ' . $room->id);

        return redirect()->route('room.detailsForm')->with('success', 'Room details successfully added!');
    }

    // Add Room to RoomList
    public function addRoomToList(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'RoomNo' => 'required|string|max:10|unique:rooms_lists,RoomNo',
            'TypeRoom' => 'required|string|max:50',
            'RoomFloor' => 'required|string|max:50',
            'RoomBlock' => 'required|string|max:50',
            'Status' => 'required|in:Available,Booked',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $room = new RoomList();
        $room->RoomNo = $request->RoomNo;
        $room->TypeRoom = $request->TypeRoom;
        $room->RoomFloor = $request->RoomFloor;
        $room->RoomBlock = $request->RoomBlock;
        $room->Status = $request->Status;
        $room->save();

        return redirect()->route('RoomList')->with('success', 'Room added successfully to the list!');
    }

    // Update existing room details (for PUT /room/details route)
    public function updateRoomDetails(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'room_id' => 'required',
            'Image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'TypeRoom' => 'required|string|max:255',
            'Facilities' => 'required|string|max:255',
            'Rate' => 'required|string|max:15',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $roomId = $request->input('room_id');

        // Find the room in the `rooms_details` table
        $room = new Room();
        $room->setTable('rooms_details');
        $room = $room->findOrFail($roomId);

        // Handle image update
        if ($request->hasFile('Image')) {
            // Delete the existing image if it exists
            if ($room->ImagePath && Storage::disk('public')->exists($room->ImagePath)) {
                Storage::disk('public')->delete($room->ImagePath);
            }
            $room->ImagePath = $request->file('Image')->store('room_images', 'public');
        }

        $room->TypeRoom = $request->TypeRoom;
        $room->Facilities = $request->Facilities;
        $room->Rate = $request->Rate;
        $room->save();

        return redirect()->route('room.detailsForm')->with('success', 'Room details updated successfully!');
    }

    // Update Room in RoomList
    public function updateRoomList(Request $request, $id)
    {
        // Find the room by ID and validate
        $room = RoomList::findOrFail($id);

        $request->validate([
            'RoomNo' => 'required|string|max:255',
            'TypeRoom' => 'required|string|max:255',
            'RoomFloor' => 'required|string|max:255',
            'RoomBlock' => 'required|string|max:255',
            'Status' => 'required|string|max:255',
        ]);

        $room->update($request->all());

        return redirect()->route('RoomList')->with('success', 'Room details updated successfully.');
    }

    // Delete room details (for DELETE /room/details route)
    public function deleteRoomDetails(Request $request)
    {
        $roomId = $request->input('room_id');

        // Set the table for the model
        $room = new Room();
        $room->setTable('rooms_details');
        $room = $room->find($roomId);

        if (!$room) {
            return redirect()->route('room.detailsForm')->with('error', 'Room not found!');
        }

        // Delete the image if it exists
        if ($room->ImagePath && Storage::disk('public')->exists($room->ImagePath)) {
            Storage::disk('public')->delete($room->ImagePath);
        }

        // Delete the room
        $room->delete();

        return redirect()->route('room.detailsForm')->with('success', 'Room deleted successfully!');
    }

    // Delete Room from RoomList
    public function destroy($id)
    {
        try {

            $rooms = RoomList::all();
            $room = $rooms->findOrFail($id);
            // // Perform deletion
            $room->delete();

            return redirect()->route('RoomList')->with('success', 'Room deleted successfully!');
        } catch (\Exception $e) {
            // Log error
            Log::error('Error deleting room: ' . $e->getMessage());

            return redirect()->route('RoomList')->with('error', 'Error deleting room: ' . $e->getMessage());
        }
    }

    // Book Room in RoomList
    // public function bookRoomInList(Request $request)
    // {
    //     $validator = Validator::make($request->all(), [
    //         'room_id' => 'required|exists:rooms_lists,_id',
    //     ]);

    //     if ($validator->fails()) {
    //         return redirect()->back()->withErrors($validator)->withInput();
    //     }

    //     $room = RoomList::findOrFail($request->room_id);

    //     if ($room->Status === 'Booked') {
    //         return redirect()->back()->with('error', 'Room is already booked!');
    //     }

    //     $room->Status = 'Booked';
    //     $room->save();

    //     return redirect()->back()->with('success', 'Room booked successfully!');
    // }

    public function filterRoomStatus(Request $request)
    {
        $status = $request->get('status'); // Get the filter status from AJAX
        $query = RoomList::query();

        if ($status && $status !== 'all') {
            $rooms = $query->where('Status', $status)->get(); // Filter based on status
        }else {
            $rooms = $query->get()->all(); // Retrieve the filtered list of rooms$
        }


        return response()->json(['rooms' => $rooms]);
    }

}
