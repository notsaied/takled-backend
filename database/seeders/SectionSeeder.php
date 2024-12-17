<?php

namespace Database\Seeders;

use App\Models\Section;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sectionNum = 6;

        for($i = 1; $i <= $sectionNum; $i++){
            Section::create([
                'name' => 'القسم '.$i
            ]);
        }
    }
}
