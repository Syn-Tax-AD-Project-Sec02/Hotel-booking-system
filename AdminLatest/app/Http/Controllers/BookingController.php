<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class BookingController extends Controller
{
    public function showBookingList()
    {
        $bookings = Booking::from('booking_list')->paginate(6);
        return view('Admin.Booking.Booking', compact('bookings'));
    }

    public function addBookingList(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'Name' => 'required|string|max:255',
            'RoomNo' => 'required|integer|min:1',
            'TypeRoom' => 'required|string|in:Single,Standard,Deluxe,Scholars,Suite',
            'CheckIn' => 'required|date|before_or_equal:CheckOut',
            'CheckOut' => 'required|date|after_or_equal:CheckIn',
            'Phone' => 'required|string|max:10,15',
        ]);

        $room = new Room();
        $room->setTable('room_lists');
        $room = $room->where('RoomNo', $request->RoomNo)
             ->where('TypeRoom', $request->TypeRoom)
             ->first();
        if (!$room) {
            return redirect()->back()->with('error', 'The selected room does not exist or the details do not match.');
        }

        // Save user to MongoDB
        $booking = new Booking;
        $booking->setTable('booking_list');

        $existingBooking = $booking->where('RoomNo', $request->RoomNo)
        ->where(function ($query) use ($request) {
            $query->whereBetween('CheckIn', [$request->CheckIn, $request->CheckOut])
                  ->orWhereBetween('CheckOut', [$request->CheckIn, $request->CheckOut])
                  ->orWhere(function ($query) use ($request) {
                      $query->where('CheckIn', '<=', $request->CheckIn)
                            ->where('CheckOut', '>=', $request->CheckOut);
                  });
        })
        ->first();

        if ($existingBooking) {
            return redirect()->back()->with('error', 'The selected room is already booked for the chosen dates.');
        }

        $booking->BookingID = 'BKG' . str_pad(rand(1, 999), 3, '0', STR_PAD_LEFT);
        $booking->Name = $request->Name;
        $booking->RoomNo = $request->RoomNo;
        $booking->TypeRoom = $request->TypeRoom;
        $booking->CheckIn = $request->CheckIn;
        $booking->CheckOut = $request->CheckOut;
        $booking->Phone = $request->Phone;
        $booking->save();

        // Log the email verification event
        Log::info('Booking details successfully added: ' . $booking->id);
        return redirect()->route('bookingListsForm')->with('success', 'Room details successfully added!');
        //return redirect()->route('login')->with('success', 'Registration successful! Please check your email for the verification link.');
        //return redirect()->route('forgotPassword');
    }

    public function updateBookingList(Request $request)
    {
       // dd($request->all());
    $bookingId = $request->input('booking_id');

    $booking = new Booking();
    $booking->setTable('booking_list'); // Ensure you're pointing to the right table

    $booking = $booking->findOrFail($bookingId);

    $booking->Name = $request->Name;
    $booking->RoomNo = $request->RoomNo;
    $booking->TypeRoom = $request->TypeRoom;
    $booking->CheckIn = $request->CheckIn;
    $booking->CheckOut = $request->CheckOut;
    $booking->Phone = $request->Phone;
    $booking->save();

    return redirect()->route('bookingListsForm')->with('success', 'Room details updated successfully!');
    }

    public function deleteBookingList(Request $request)
    {
       // dd($request->all());

        $bookingId = $request->input('booking_id');

        // Set table dynamically
        $booking = new Booking();
        $booking->setTable('booking_list');

        $booking = $booking->find($bookingId);

        if (!$booking) {
            return redirect()->back()->with('error', 'Booking not found.');
        }

        // Delete booking
        $booking->delete();

        return redirect()->route('bookingListsForm')->with('success', 'Booking deleted successfully!');
    }

    public function getRoomsByType(Request $request)
    {
        $selectedRoomType = $request->input('typeRoom');
        $checkIn = $request->input('checkIn');
        $checkOut = $request->input('checkOut');

        // Convert input dates to Carbon instances for proper comparison
    $checkIn = \Carbon\Carbon::parse($checkIn);
    $checkOut = \Carbon\Carbon::parse($checkOut);

        // Fetch all rooms from the room_lists table based on the selected room type
        $rooms = new Room();
        $rooms->setTable('room_lists');
        // Get all available rooms for the selected room type
        $rooms = $rooms->where('TypeRoom', $selectedRoomType)
        ->get();

        // Get booked rooms by checking if they overlap with the requested date range
        $booking = new Booking();
        $booking->setTable('booking_list');

        $bookedRooms = $booking->where(function ($query) use ($checkIn, $checkOut) {
            $query->whereBetween('CheckIn', [$checkIn, $checkOut]) // Check if booking CheckIn is within the range
                  ->orWhereBetween('CheckOut', [$checkIn, $checkOut]) // Check if booking CheckOut is within the range
                  ->orWhere(function ($query) use ($checkIn, $checkOut) {
                      $query->where('CheckIn', '<=', $checkIn) // Booking period completely overlaps requested period
                            ->where('CheckOut', '>=', $checkOut);
                  });
        })->pluck('RoomNo')->toArray(); // Convert booked room numbers to an array

        // Step 3: Filter rooms that are not booked (exclude booked rooms)
        $availableRooms = $rooms->filter(function ($room) use ($bookedRooms) {
            return !in_array($room->RoomNo, $bookedRooms); // Exclude rooms already booked
        });

         Log::info($rooms);

        // Return the rooms as a JSON response
        return response()->json(['rooms' => $rooms]);
    }


}
