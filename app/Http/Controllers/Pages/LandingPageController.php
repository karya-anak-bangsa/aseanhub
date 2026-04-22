<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

# List model-model yang akan ditampilkan dihalaman frontend
use App\Models\AboutAseanHub;
use App\Models\OpeningSpeeches;
use App\Models\Timeline;
use App\Models\Judges;

class LandingPageController extends Controller
{
    public function index()
    {

        $about_aseanhub     = AboutAseanHub::where('status_data', 'Active')->first();
        $opening_speeches   = OpeningSpeeches::where('status_data', 'Active')->orderBy('sort_order', 'asc')->get();
        $timelines          = Timeline::orderBy('date_start', 'asc')->get();
        $judges             = Judges::where('status_data', 'Active')->orderBy('judges_name', 'asc')->get();

        return view('pages.main', compact(
            'about_aseanhub',
            'opening_speeches',
            'timelines',
            'judges',
        ));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
