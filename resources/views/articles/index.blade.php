<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Article index</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex flex-col items-center bg-gradient from-bg-slate-800 to-bg-slate-900 prose">
    <h1>Articles</h1>
    <ul class="max-w-2xl prose">
        @foreach ($articles as $article)
            <li><a href="{{ route('articles.show', $article) }}" class="underline">{{ $article->title }}</a></li>
        @endforeach
    </ul>
</body>
</html>
