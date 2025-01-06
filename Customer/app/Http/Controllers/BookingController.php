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
        $rate = $request->query('rate');

        $room = new Room;
        $room->setTable('rooms_details');
        $rate = $room->where('_id', $roomId)->value('Rate');
        
        
        $user = Auth::user();
        
        return view('Payment',compact('roomId', 'checkin', 'checkout', 'guests', 'user', 'rate'));
    }

public function storeBooking(Request $request)
{
    // Calculate duration
    $checkinDate = \Carbon\Carbon::parse($request->checkin);
    $checkoutDate = \Carbon\Carbon::parse($request->checkout);
    $duration = $checkinDate->diffInDays($checkoutDate);

    // Retrieve rate for the room
    $room = new Room;
    $room->setTable('rooms_details'); // Ensure correct table name
    $rate = $room->where('_id', $request->TypeRoom)->value('Rate');

    // Calculate total cost
    $totalCost = $duration * $rate;
    // Create a new booking
    $booking = new Booking;
    $booking->setTable('booking_list');

    $booking->BookingID = 'BKG' . str_pad(rand(1, 999), 3, '0', STR_PAD_LEFT);
    $booking->Name = $request->name;  // Assuming the input field is named 'customer_name'
    $booking->RoomNo = $request->TypeRoom;    // Assuming input for room number
    $booking->TypeRoom = $request->TypeRoom;  // Assuming room type input
    $booking->CheckIn = $request->checkin;
    $booking->CheckOut = $request->checkout;
    $booking->Phone = $request->phone; // Assuming guests are included
    $booking->Rate = $rate;
    $booking->TotalPrice = $totalCost;       // Assuming the input is 'phone'
    $booking->save();

    // Create payment using ToyyibPay API
    return redirect()->route('toyyibpay')->with([
        'booking' => $booking,
        'totalCost' => $totalCost,
    ]);
}

   // In BookingController.php
public function checkAvailability(Request $request)
{
    $roomId = $request->input('room_id');
    $typeRoom = $request->input('type_room'); 
    $checkin = $request->input('checkin');
    $checkout = $request->input('checkout');

    $booking = new Booking();
    $booking->setTable('booking_list');

    // Check for overlapping bookings
    $availability = $booking->where('type_room', $typeRoom)
        ->where(function ($query) use ($checkin, $checkout) {
            $query->whereBetween('checkin', [$checkin, $checkout])
                  ->orWhereBetween('checkout', [$checkin, $checkout])
                  ->orWhere(function ($subQuery) use ($checkin, $checkout) {
                      $subQuery->where('checkin', '<=', $checkin)
                               ->where('checkout', '>=', $checkout);
                  });
        })
        ->exists();

    // Return response
    return response()->json(['isAvailable' => !$availability]);
    }

}
