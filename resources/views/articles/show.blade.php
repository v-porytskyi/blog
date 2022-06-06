<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
</head>
<body>
<main>
    <h1>One article</h1>
    <div>
        <article style="border: 1px solid #000; padding: 10px; margin: 20px">
            <header>
                <h1>{{ $article->title }}</h1>
            </header>
            <p>
                {{ $article->description }}
            </p>
            <footer>
                <datetime>{{ $article->created_at }}</datetime>
            </footer>
        </article>
    </div>
</main>
</body>
</html>
