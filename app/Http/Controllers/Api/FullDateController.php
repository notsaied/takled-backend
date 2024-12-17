<?php

namespace App\Http\Controllers\Api;

use App\Models\Barber;
use App\Models\Config;
use App\Models\Booking;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class FullDateController extends Controller
{


    public function index(){
        $barbers = Barber::with('services', 'bookings')->get()->map(function($barber) {
            $barber->image_url = $barber->getImageUrl();
            return $barber;
        });
        $config = Config::first();

        return response()->json([
            "success" => true,
            "barbers" => $barbers,
            "info" => $config
        ], 200);

    }
}
