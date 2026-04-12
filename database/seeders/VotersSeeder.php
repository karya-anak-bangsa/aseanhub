<?php

namespace Database\Seeders;

use App\Models\Voters;
use Illuminate\Database\Seeder;

class VotersSeeder extends Seeder
{
    public function run(): void
    {
        Voters::factory()->count(75)->create();
    }
}
