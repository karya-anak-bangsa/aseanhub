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
            'description'   => 'Participants register their teams and complete all required information to join the ASEAN HUB 2026 competition.',
            'date_start'    => '2026-04-01 00:00:00',
            'date_end'      => '2026-05-30 23:59:59',
            'phase_key'     => Timeline::PHASE_REGISTRATION,
            'status_data'   => 'Active',
        ]);

        Timeline::create([
            'title'         => 'Design Submission',
            'description'   => 'Participants submit their urban design proposals based on the competition guidelines and evaluation criteria.',
            'date_start'    => '2026-06-01 00:00:00',
            'date_end'      => '2026-06-30 23:59:59',
            'phase_key'     => Timeline::PHASE_SUBMISSION,
            'status_data'   => 'Active',
        ]);

        Timeline::create([
            'title'         => 'Assessment Phase One',
            'description'   => 'Judges evaluate submitted designs based on creativity, feasibility, and alignment with the competition theme.',
            'date_start'    => '2026-07-01 00:00:00',
            'date_end'      => '2026-07-30 23:59:59',
            'phase_key'     => Timeline::PHASE_ASSESSMENT,
            'status_data'   => 'Active',
        ]);

        Timeline::create([
            'title'         => 'Assessment Phase Two',
            'description'   => 'Selected finalists undergo a second round of evaluation to determine the best designs among top candidates.',
            'date_start'    => '2026-08-01 00:00:00',
            'date_end'      => '2026-08-30 23:59:59',
            'phase_key'     => Timeline::PHASE_ASSESSMENT,
            'status_data'   => 'Active',
        ]);

        Timeline::create([
            'title'         => 'Announcement',
            'description'   => 'Winners of the ASEAN HUB 2026 competition are officially announced to the public.',
            'date_start'    => '2026-09-01 00:00:00',
            'date_end'      => '2026-09-30 23:59:59',
            'phase_key'     => Timeline::PHASE_ANNOUNCEMENT,
            'status_data'   => 'Active',
        ]);
    }
}
