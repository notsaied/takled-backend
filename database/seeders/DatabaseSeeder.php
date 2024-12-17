<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\ProductDetailsSeed;
use Database\Seeders\DefaultSuperAdminSeed;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        $this->call([
            DefaultSuperAdminSeed::class,
            SectionSeeder::class
        ]);
    }

}
