<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\OpeningSpeeches;
use Illuminate\Http\Request;

class OpeningSpeechesController extends Controller
{

    #--------------------------------------------------------------------------
    # INDEX + SHOW
    #--------------------------------------------------------------------------
    public function index()
    {
        $data = OpeningSpeeches::where('status_data', 'Active')->orderBy('sort_order', 'asc')->get();
        return view('modules.opening-speeches.index', compact('data'));
    }

    public function show(string $id)
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function edit(string $id)
    {
        $data = OpeningSpeeches::findOrFail($id);
        return view('modules.opening-speeches.edit', compact('data'));
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
