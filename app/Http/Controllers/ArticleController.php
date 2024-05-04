<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Support\Facades\Storage;
use Spatie\Browsershot\Browsershot;

class ArticleController extends Controller
{
    public function index()
    {
        return view('articles.index', ['articles' => Article::get()]);
    }

    public function show(Article $article)
    {
        return view('articles.show', ['article' => $article]);
    }

    public function openGraphHtml(Article $article)
    {
        return view('articles.open-graph', ['article' => $article]);
    }
}
