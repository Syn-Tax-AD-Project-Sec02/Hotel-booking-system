<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Room;
use Illuminate\Support\Facades\Auth;
use Validator;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\ToyyibpayController;
use Illuminate\Support\Facades\Http;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    // public function viewBooking()
    // {
    //     return view('booking');
    // }
    public function bookingForm(Request $request){
        $roomId = $request->query('room_id');
        $checkin = $request->query('checkin');
        $checkout = $request->query('checkout');
        $guests = $request->query('guests');

        $user = Auth::user();


        return view('Payment',compact('roomId', 'checkin', 'checkout', 'guests', 'user'));
    }

public function storeBooking(Request $request)
{
    
    // Create a new booking
    $booking = new Booking;
    $booking->setTable('booking_list');

    $booking->BookingID = 'BKG' . str_pad(rand(1, 999), 3, '0', STR_PAD_LEFT);
    $booking->Name = $request->name;  // Assuming the input field is named 'customer_name'
    $booking->RoomNo = $request->TypeRoom;    // Assuming input for room number
    $booking->TypeRoom = $request->TypeRoom;  // Assuming room type input
    $booking->CheckIn = $request->checkin;
    $booking->CheckOut = $request->checkout;
    $booking->Phone = $request->phone;         // Assuming the input is 'phone'
    $booking->save();

    // Create payment using ToyyibPay API
    return redirect()->route('toyyibpay')->with('booking', $booking);
}

   // In BookingController.php
public function checkAvailability(Request $request)
{
    $roomId = $request->input('room_id');
        $checkin = $request->input('checkin');
        $checkout = $request->input('checkout');

        // Logic to check availability (this is just an example, adjust it to your needs)
        $isAvailable = true; // Assume the room is available (you should replace this with actual logic)

        // Return the result as a JSON response
        return response()->json(['isAvailable' => $isAvailable]);
    }

}
