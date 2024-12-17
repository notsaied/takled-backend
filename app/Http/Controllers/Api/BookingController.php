<?php

namespace App\Http\Controllers\Api;

use App\Models\Barber;
use App\Models\Booking;
use App\Events\NewBooking;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;

class BookingController extends Controller
{


    public function index()
    {
        return response()->json([
            "success" => true,
            "bookings" => Booking::all()
        ], 200);
    }
    public function store(Request $request)
    {
        $data = Validator::make($request->all(), [
            "barber_id" => "required|exists:barbers,id",
            "service_id" => "required|exists:services,id",
            "name" => "required",
            "phone" => "required",
            "message" => "nullable",
            "booking_date" => "required|date",
            "booking_time" => "required|date_format:H:i",
        ]);

        if ($data->fails()) {
            return response()->json([
                "success" => false,
                "errors" => $data->errors()
            ], 422);
        }


        $barber = Barber::find($request->barber_id);

        if (!$barber->services->contains('id', $request->service_id)) {
            return response()->json([
                "success" => false,
                "message" => "The barber does not offer this service."
            ], 400);
        }

        $booking = Booking::create($data->validated());



        event(new NewBooking($booking));

        return response()->json([
            "success" => true,
            "message" => "Booking created successfully",
            "booking" => $booking
        ], 200);
    }
}
