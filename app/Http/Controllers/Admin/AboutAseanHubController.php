<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AboutAseanHub;
use Illuminate\Support\Facades\Storage;

class AboutAseanHubController extends Controller
{
    public function index()
    {
        $data = AboutAseanHub::first();
        return view('modules.about-aseanhub.index', compact('data'));
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
        $data = AboutAseanHub::firstOrFail();
        return view('modules.about-aseanhub.edit', compact('data'));
    }

    public function destroy(string $id)
    {
        //
    }
}
