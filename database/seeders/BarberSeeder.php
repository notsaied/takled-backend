<?php

namespace Database\Seeders;

use App\Models\Barber;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BarberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $barber = Barber::create([
            "name" => "Barber 1",
            "image" => "barber1.jpg",
            "telegram_id" => "123456789"
        ]);

        $barber->services()->attach([1, 2]);

    }
}
