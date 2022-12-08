<?php

namespace App\Http\Controllers;

class NewsController extends Controller
{
	public function index()
	{
        $news = \App\Models\News::paginate(6);
        return view('news.index', compact('news'));
	}

    public function show($slug)
    {
        $news = \App\Models\News::where('slug', $slug)->first();
        return view('news.show', compact('news'));
    }
}
