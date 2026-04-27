<?php

namespace Database\Seeders;

use App\Models\Timeline;
use Illuminate\Database\Seeder;

class TimelineSeeder extends Seeder
{
    public function run(): void
    {
        Timeline::truncate();
        Timeline::insert([
            [
                'title'         => 'Registration Phase',
                'description'   => 'Participants registration period',
                'date_start'    => '2026-01-01 00:00:00',
                'date_end'      => '2026-01-30 23:59:59',
                'phase_key'     => Timeline::PHASE_REGISTRATION,
                'status_data'   => 'Active',
            ],
            [
                'title'         => 'Design Submission',
                'description'   => 'Participants upload urban design',
                'date_start'    => '2026-02-01 00:00:00',
                'date_end'      => '2026-02-28 23:59:59',
                'phase_key'     => Timeline::PHASE_SUBMISSION,
                'status_data'   => 'Active',
            ],
            [
                'title'         => 'Assessment Phase One',
                'description'   => 'First judging process',
                'date_start'    => '2026-03-01 00:00:00',
                'date_end'      => '2026-03-30 23:59:59',
                'phase_key'     => Timeline::PHASE_ASSESSMENT,
                'status_data'   => 'Active',
            ],
            [
                'title'         => 'Assessment Phase Two',
                'description'   => 'Second judging process',
                'date_start'    => '2026-04-01 00:00:00',
                'date_end'      => '2026-04-30 23:59:59',
                'phase_key'     => Timeline::PHASE_ASSESSMENT,
                'status_data'   => 'Active',
            ],
            [
                'title'         => 'Announcement',
                'description'   => 'Official announcement of winners',
                'date_start'    => '2026-05-25 00:00:00',
                'date_end'      => '2026-06-05 23:59:59',
                'phase_key'     => Timeline::PHASE_ANNOUNCEMENT,
                'status_data'   => 'Active',
            ],
        ]);
    }
}
