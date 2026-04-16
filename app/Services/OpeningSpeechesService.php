<?php

namespace App\Services;

use App\Models\OpeningSpeeches;

class OpeningSpeechesService
{
    public function getAll()
    {
        return OpeningSpeeches::where('status_data', 'Active')->orderBy('sort_order', 'asc')->get();
    }
}
