<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Service::create([
            "name" => "Haircut",
            "price" => 100,
            "duration" => 30
        ]);
        Service::create([
            "name" => "Buzz",
            "price" => 50,
            "duration" => 20
        ]);
    }
}
