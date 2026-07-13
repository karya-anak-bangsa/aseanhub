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
            # Company Profile ASEAN HUB
            // NewsCategorySeeder::class,
            // NewsSeeder::class,

            # Showcase ASEAN HUB
            PhotoGallerySeeder::class,

            # ASEAN Hub Competition
            AboutAseanHubSeeder::class,
            AdminSeeder::class,
            JudgesSeeder::class,
            ParticipantsSeeder::class,
            VotersSeeder::class,
            OpeningSpeechesSeeder::class,
            AboutCompetitionSeeder::class,
            TimelineSeeder::class,
            SiteAreaSeeder::class,
        ]);
    }
}
