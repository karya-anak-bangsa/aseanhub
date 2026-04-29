<?php

namespace Database\Seeders;

use App\Models\AboutCompetition;
use Illuminate\Database\Seeder;

class AboutCompetitionSeeder extends Seeder
{
    public function run(): void
    {
        AboutCompetition::truncate();
        AboutCompetition::create([
            'tag'               => 'Be sure to come',
            'title'             => 'Opening Ceremony of the ASEAN Hub at Jakarta City Hall',
            'description'       => 'Join us for the official opening ceremony of the ASEAN Hub at Jakarta City Hall. This event marks the beginning of a collaborative journey to promote innovation, creativity, and sustainable development across ASEAN.',
            'event_date'        => '2026-05-10',
            'title_tor'         => 'Term of Reference',
            'description_tor'   => 'Access the official guidelines, eligibility criteria, and submission requirements for the ASEAN Hub International Design Competition. Make sure your work aligns with all standards before submitting.',
            'file_path'         => 'about-competition/EN_Term_of_Reference.pdf',
            'status_data'       => 'Active',
        ]);
    }
}
