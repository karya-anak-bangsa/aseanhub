<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        $this->call([

            # Hak Akses
            AdminSeeder::class,
            JudgesSeeder::class,
            ParticipantsSeeder::class,
            VotersSeeder::class,

            # Frontend
            AboutAseanHubSeeder::class,
            TimelineSeeder::class,
            OpeningSpeechesSeeder::class,

        ]);
    }
}
