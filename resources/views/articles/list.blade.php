<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
</head>
<body>
<main>
    <h1>List of articles</h1>
    <a href="{{route('articles.create.form')}}">Create new article</a>
    <div>
        @foreach($articles as $article)
            <article style="border: 1px solid #000; padding: 10px; margin: 20px">
                <header>
                    <a href="{{ route('articles.show', ['id' => $article->id]) }}"><h1>{{ $article->title }}</h1></a>
                </header>
                <p>
                    {{ $article->description }}
                </p>
                <footer>
                    <datetime>{{ $article->created_at }}</datetime>
                    <a href="{{route('articles.update.form', ['id' => $article->id])}}">Update</a>
                </footer>
            </article>
        @endforeach
    </div>
</main>
</body>
</html>
