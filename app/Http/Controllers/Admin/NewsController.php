<?php

namespace App\Http\Controllers\Admin;

use App\Models\News;
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
