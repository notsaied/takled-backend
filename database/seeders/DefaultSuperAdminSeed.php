<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;

class DefaultSuperAdminSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //default admin for super admin
        Admin::firstOrCreate([
            'name' => 'Super Admin',
            'username' => '1',
            'password' => Hash::make('1')
        ]);
    }
}
