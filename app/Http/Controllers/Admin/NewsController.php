<?php

namespace App\Http\Controllers\Admin;

use App\Models\News;
use App\Models\NewsCategory;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::with('newsCategory')->orderByDesc('published_date')->orderByDesc('id_news')->get();
        return view('modules.news.index', compact('news'));
    }

    public function show(string $id)
    {
        //
    }

    public function create()
    {
        return view('modules.news.create');
    }

    public function store(Request $request)
    {
        //
    }


    public function edit(string $id)
    {
        $news = News::findOrFail($id);

        $newsCategories = NewsCategory::where('status_data', 'Active')
            ->orderBy('category_name_en')
            ->get();

        return view('modules.news.edit', compact(
            'news',
            'newsCategories'
        ));
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
