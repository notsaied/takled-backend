<?php

namespace Database\Seeders;

use App\Models\Booking;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Booking::create([
            "barber_id" => 1,
            "service_id" => 1,
            "name" => "John Doe",
            "phone" => "1234567890",
            "message" => "This is a test booking",
            "booking_date" => "2024-12-01",
            "booking_time" => "10:00"
        ]);

        Booking::create([
            "barber_id" => 1,
            "service_id" => 2,
            "name" => "ahmed",
            "phone" => "1234567890",
            "message" => "This is a test booking",
            "status" => 1,
            "booking_date" => "2024-12-01",
            "booking_time" => "10:00"
        ]);
    }
}
