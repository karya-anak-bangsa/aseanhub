<?php

namespace Database\Seeders;

use App\Models\Timeline;
use Illuminate\Database\Seeder;

class TimelineSeeder extends Seeder
{
    public function run(): void
    {
        Timeline::create([
            'title'         => 'Registration Phase',
            'description'   => 'Participants registration period',
            'date_start'    => '2026-01-01 00:00:00',
            'date_end'      => '2026-01-30 23:59:59',
            'phase_key'     => 'registration',
            'status_data'   => 'Active',
        ]);

        Timeline::create([
            'title'         => 'Design Submission',
            'description'   => 'Participants upload urban design',
            'date_start'    => '2026-02-01 00:00:00',
            'date_end'      => '2026-02-28 23:59:59',
            'phase_key'     => 'submission',
            'status_data'   => 'Not Active',
        ]);
        Timeline::create([
            'title'         => 'Assessment Phase One',
            'description'   => 'First judging process',
            'date_start'    => '2026-03-01 00:00:00',
            'date_end'      => '2026-03-30 23:59:59',
            'phase_key'     => 'assessment',
            'status_data'   => 'Not Active',
        ]);
        Timeline::create([
            'title'         => 'Assessment Phase Two',
            'description'   => 'Second judging process',
            'date_start'    => '2026-04-01 00:00:00',
            'date_end'      => '2026-04-30 23:59:59',
            'phase_key'     => 'assessment',
            'status_data'   => 'Not Active',
        ]);
        Timeline::create([
            'title'         => 'Final Assessment',
            'description'   => 'Final judging session',
            'date_start'    => '2026-05-01 00:00:00',
            'date_end'      => '2026-05-30 23:59:59',
            'phase_key'     => 'assessment',
            'status_data'   => 'Not Active',
        ]);
    }
}
