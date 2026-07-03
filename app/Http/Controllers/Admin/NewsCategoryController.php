<?php

namespace App\Http\Controllers\Admin;

use App\Models\NewsCategory;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewsCategoryController extends Controller
{
    public function index()
    {
        $data = NewsCategory::where('status_data', 'Active')->orderBy('sort_order', 'asc')->get();
        return view('modules.news-category.index', compact('data'));
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
