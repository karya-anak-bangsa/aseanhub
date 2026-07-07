<?php

namespace App\Http\Controllers\Admin;

use App\Models\NewsCategory;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewsCategoryController extends Controller
{
    public function index()
    {
        $newsCategories = NewsCategory::where('status_data', 'Active')->orderBy('category_name_en')->get();
        return view('modules.news-category.index', compact('newsCategories'));
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
