<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $article->title }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex justify-center py-20">
    <div class="max-w-2xl prose">
        <h1 class="font-bold text-2xl">{{ $article->title }}</h1>

        <div class="my-8 pb-2">
            <a href="{{ route('articles.open-graph', $article) }}" class="underline">Open Graph HTML</a>
            <a href="{{ route('articles.open-graph-image', $article) }}" class="underline">Open Graph Image</a>
        </div>

        <img src="{{ $article->image }}" width="800" height="586" class="bg-slate-100 my-8">

        <div>
            {!! nl2br(e($article->body)) !!}
        </div>
    </div>
</body>
</html>
