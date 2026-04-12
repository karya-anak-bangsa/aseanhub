<?php

namespace Database\Seeders;

use App\Models\Judges;
use Illuminate\Database\Seeder;

class JudgesSeeder extends Seeder
{
    public function run(): void
    {
        Judges::factory()->count(10)->assessment_one()->create();
        Judges::factory()->count(10)->assessment_two()->create();
        Judges::factory()->count(10)->final_assessment()->create();
    }
}
