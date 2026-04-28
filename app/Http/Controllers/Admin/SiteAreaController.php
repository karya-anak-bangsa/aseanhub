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

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        #
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = SiteArea::findOrFail($id);
        return view('modules.site-area.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
