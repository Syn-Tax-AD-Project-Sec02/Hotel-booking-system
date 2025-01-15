<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Room;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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
            $typeRoom = $request->query('type_room'); // Use consistent lowercase naming
            $checkin = $request->query('checkin');
            $checkout = $request->query('checkout');
            $guests = $request->query('guests');
            $rate = $request->query('rate');
            $promotion = $request->query('promotion');

            $room = new Room();
            $room->setTable('rooms_details');
            $rate = $room->where('_id', $roomId)->value('Rate');
            $promotion = $room->where('_id', $roomId)->value('Promotion');

            $user = Auth::user();

            return view('Payment', compact('roomId', 'typeRoom', 'checkin', 'checkout', 'guests', 'user', 'rate', 'promotion'));
        }   

        public function storeBooking(Request $request)
        {
            // Calculate duration
            $checkinDate = \Carbon\Carbon::parse($request->checkin);
            $checkoutDate = \Carbon\Carbon::parse($request->checkout);
            $duration = $checkinDate->diffInDays($checkoutDate);
            $typeRoom = $request->input('type_room');

            // Retrieve rate for the room
            $room = new Room;
            $room->setTable('rooms_details');

            // Calculate total cost 
            if ($request->promotion !== null) {
                $totalCost = $duration * ($request->rate - ($request->rate * ($request->promotion * 0.01)));
            } else {
                $totalCost = $duration * $request->rate;
            }

            $totalCost = $totalCost + ($totalCost * 0.06);
            // Create a new booking
            $booking = new Booking;
            $booking->setTable('booking_list');

            $booking->BookingID = 'BKG' . str_pad(rand(1, 999), 3, '0', STR_PAD_LEFT);
            $booking->Name = $request->name;  // Assuming the input field is named 'customer_name'
            $booking->RoomNo = $request->RoomNo;    // Assuming input for room number
            $booking->TypeRoom = $typeRoom; // Assuming room type input
            $booking->CheckIn = $request->checkin;
            $booking->CheckOut = $request->checkout;
            $booking->Guests = $request->TotalGuests; //Total Guests for the booking
            $booking->Phone = $request->phone; // Assuming guests are included
            $booking->Rate = $request->rate; // Corrected assignment
            $booking->TotalPrice = $totalCost; // Assuming the input is 'phone'
            $booking->save();

            // Create payment using ToyyibPay API
            return redirect()->route('toyyibpay')->with([
                'booking' => $booking,
                'totalCost' => $totalCost
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

    public function checkAvail(Request $request)
    {
        $roomId = $request->input('room_id');
        $typeRoom = $request->input('type_room');
        $checkin = $request->input('checkin');
        $checkout = $request->input('checkout');

        $booking = new Booking();
        $booking->setTable('booking_list');

        // Check for overlapping bookings
        $booking = new Booking();
        $booking->setTable('booking_list');

        //Check Availability through joining of Room_List and Booking_List table
        $availability = DB::table('room_lists')
        ->leftJoin('booking_list', function ($join) use ($checkin, $checkout) {
            $join->on('room_lists.RoomNo', '=', 'booking_list.RoomNo')
                 ->where(function ($query) use ($checkin, $checkout) {
                     $query->where('booking_list.CheckIn', '<=', $checkout)
                           ->where('booking_list.CheckOut', '>=', $checkin);
                 });
        })
        ->whereNull('booking_list.RoomNo') // Filter out rooms that are already booked
        ->select('room_lists.*') // Select the room details
        ->get();
        
        // Return response
        return response()->json(['isAvailable' => !$availability]);
    }


}
