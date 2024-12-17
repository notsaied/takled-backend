<?php

namespace App\Http\Controllers\Admin;

use App\Models\Booking;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BookingController extends Controller
{
    public function index()
    {
        $bookings = Booking::with("barber", 'service')->latest()->paginate(20);
        return view("admin.bookings.index", compact("bookings"));
    }


    public function update(Request $request)
    {
        $booking = Booking::find($request->booking_id);
        if (!$booking) {
            return response()->json(["message" => "Booking not found"], 404);
        }
        $booking->status = $request->status;
        $booking->save();

        return response()->json(["message" => "Booking updated successfully"]);
    }
}
