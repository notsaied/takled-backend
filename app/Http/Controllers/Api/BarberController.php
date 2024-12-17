<?php

namespace App\Http\Controllers\Api;

use App\Models\Barber;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BarberController extends Controller
{
    public function index()
    {
        $barbers = Barber::with('services', 'bookings')->get();
        return response()->json($barbers);
    }


    public function barberWithBookings()
    {
        $barbers = Barber::with([
            'bookings',
            'services',
        ])->get()->toArray();

        $data = [];
        foreach ($barbers as $barber) {
            // Prepare arrays to store booked dates and work hours
            $bookedDates = [];
            $workHours = [
                'Mon' => [], 'Tue' => [], 'Wed' => [], 'Thu' => [],
                'Fri' => [], 'Sat' => [], 'Sun' => []
            ];

            // Loop through bookings for this barber
            foreach ($barber['bookings'] as $booking) {
                $bookingDate = $booking['booking_date'];
                $bookingTime = $booking['booking_time'];

                // Add the date to the booked dates list
                if (!in_array($bookingDate, $bookedDates)) {
                    $bookedDates[] = $bookingDate;
                }

                // Get the day of the week for the booking date (e.g., 'Mon', 'Tue', ...)
                $dayOfWeek = date('D', strtotime($bookingDate));

                // Add the booking time to the respective day in the workHours array
                if (!in_array($bookingTime, $workHours[$dayOfWeek])) {
                    $workHours[$dayOfWeek][] = $bookingTime;
                }
            }

            // Sort the times for each day
            foreach ($workHours as $day => $times) {
                sort($workHours[$day]);
            }

            // Add the barber's information to the response data
            $data[] = [
                'id' => $barber['id'],
                'name' => $barber['name'],
                'bookedDates' => $bookedDates,
                'workHours' => $workHours,
                'services' => $barber['services']
            ];
        }

        return $data;
    }

}
