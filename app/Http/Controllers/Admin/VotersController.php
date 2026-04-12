<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\VotersService;
use Illuminate\Http\Request;

class VotersController extends Controller
{
    protected $service;

    public function __construct(VotersService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $data  = $this->service->getAll();
        $stats = $this->service->getStatistics();
        return view('modules.voters.index', compact('data', 'stats'));
    }

    public function show(string $id)
    {
        $data = $this->service->findById($id);
        return view('modules.voters.show', compact('data'));
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
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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
