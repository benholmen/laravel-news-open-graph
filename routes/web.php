<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ArticleController::class, 'index']);

Route::get('/{article:slug}', [ArticleController::class, 'show'])
    ->name('articles.show');

Route::get('/{article:slug}/open-graph', [ArticleController::class, 'openGraphHtml'])
    ->name('articles.open-graph');

Route::get('/{article:slug}/open-graph.jpg', [ArticleController::class, 'openGraphImage'])
    ->name('articles.open-graph-image');
