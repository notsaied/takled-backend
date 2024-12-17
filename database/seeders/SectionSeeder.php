<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Section;

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
                'title' => 'العنوان '.$i,
                'description' => 'الوصف '.$i
            ]);
        }
    }
}
