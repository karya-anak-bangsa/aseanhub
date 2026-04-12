<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\TimelineService;
use Illuminate\Http\Request;

class TimelineController extends Controller
{
    protected $service;

    public function __construct(TimelineService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $data = $this->service->getAll();
        return view('modules.timeline.index', compact('data'));
    }

    public function show(string $id)
    {
        $data = $this->service->findById($id);
        return view('modules.timeline.show', compact('data'));
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
