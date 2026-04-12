<?php

namespace App\Services;

use App\Models\Timeline;

class TimelineService
{
    public function getAll()
    {
        return Timeline::orderBy('date_start', 'asc')->get();
    }

    public function findById($id)
    {
        return Timeline::findOrFail($id);
    }
}
