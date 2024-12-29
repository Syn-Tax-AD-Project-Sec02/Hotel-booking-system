<?php

namespace App\Http\Controllers;

use App\Models\Booking;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    // public function viewBooking()
    // {
    //     return view('booking');
    // }

    public function storeBooking(Request $request)
    {
        $request->validate([
            'customer_name' => 'required|string|max:255',
            'email' => 'required|email',
            'check_in' => 'required|date',
            'check_out' => 'required|date|after:check_in',
            'room_type' => 'required|string',
            'number_of_guests' => 'required|integer|min:1',
        ]);

        $booking = new Booking;

        $booking->BookingID = 'BKG' . str_pad(rand(1, 999), 3, '0', STR_PAD_LEFT);
        $booking->Name = $request->Name;
        $booking->RoomNo = $request->RoomNo;
        $booking->TypeRoom = $request->TypeRoom;
        $booking->CheckIn = $request->CheckIn;
        $booking->CheckOut = $request->CheckOut;
        $booking->Phone = $request->Phone;
        $booking->save();

        return redirect()->back()->with('success', 'Booking successful!');
    }
}
