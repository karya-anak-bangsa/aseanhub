<?php

namespace Database\Seeders;

use App\Models\Timeline;
use Illuminate\Database\Seeder;

class TimelineSeeder extends Seeder
{
    public function run(): void
    {
        Timeline::truncate();

        Timeline::create([
            'title'         => 'Registration Phase',
            'description'   => 'Participants registration period',
            'date_start'    => '2026-05-01 00:00:00',
            'date_end'      => '2026-05-30 23:59:59',
            'phase_key'     => Timeline::PHASE_REGISTRATION,
            'status_data'   => 'Active',
        ]);

        Timeline::create([
            'title'         => 'Design Submission',
            'description'   => 'Participants upload urban design',
            'date_start'    => '2026-06-01 00:00:00',
            'date_end'      => '2026-06-30 23:59:59',
            'phase_key'     => Timeline::PHASE_SUBMISSION,
            'status_data'   => 'Active',
        ]);

        Timeline::create([
            'title'         => 'Assessment Phase One',
            'description'   => 'First judging process',
            'date_start'    => '2026-07-01 00:00:00',
            'date_end'      => '2026-07-30 23:59:59',
            'phase_key'     => Timeline::PHASE_ASSESSMENT,
            'status_data'   => 'Active',
        ]);

        Timeline::create([
            'title'         => 'Assessment Phase Two',
            'description'   => 'Second judging process',
            'date_start'    => '2026-08-01 00:00:00',
            'date_end'      => '2026-08-30 23:59:59',
            'phase_key'     => Timeline::PHASE_ASSESSMENT,
            'status_data'   => 'Active',
        ]);

        Timeline::create([
            'title'         => 'Announcement',
            'description'   => 'Official announcement of winners',
            'date_start'    => '2026-09-01 00:00:00',
            'date_end'      => '2026-09-30 23:59:59',
            'phase_key'     => Timeline::PHASE_ANNOUNCEMENT,
            'status_data'   => 'Active',
        ]);
    }
}
