<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\OpeningSpeechesService;
use Illuminate\Http\Request;

class OpeningSpeechesController extends Controller
{

    protected $service;

    public function __construct(OpeningSpeechesService $service)
    {
        $this->service = $service;
    }

    #--------------------------------------------------------------------------
    # INDEX + SHOW
    #--------------------------------------------------------------------------
    public function index()
    {
        $data = $this->service->getAll();
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
