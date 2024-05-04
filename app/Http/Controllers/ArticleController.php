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

    public function openGraphImage(Article $article)
    {
        // create and cache
        $filename = "open-graph/{$article->slug}.jpg";

        $image = Storage::get($filename);

        if (! $image) {
            $image = Browsershot::url(route('articles.open-graph', $article))
                ->preventUnsuccessfulResponse()
                ->windowSize(1200, 630)
                ->setScreenshotType('jpeg', 100)
                ->screenshot();

            Storage::put($filename, $image);
        }

        return response($image)
            ->header('Content-Type', 'image/jpeg');

        // create on demand
        $image = Browsershot::url(route('articles.open-graph', $article))
            ->preventUnsuccessfulResponse()
            ->windowSize(1200, 630)
            ->setScreenshotType('jpeg', 100)
            ->screenshot();

        return response($image)
            ->header('Content-Type', 'image/jpeg');
    }
}
