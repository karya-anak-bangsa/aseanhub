<?php

namespace App\Http\Controllers\Admin;

use App\Models\SiteArea;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SiteAreaController extends Controller
{
    public function index()
    {
        $data = SiteArea::orderBy('sort_order')->get();
        return view('modules.site-area.index', compact('data'));
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
        $data = SiteArea::findOrFail($id);
        return view('modules.site-area.edit', compact('data'));
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
