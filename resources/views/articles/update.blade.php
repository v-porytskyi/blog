<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
</head>
<body>
<main>
    @if($errors)
        <div class="error">{{ $errors }}</div>
    @endif

    <h1>Update post</h1>
    <form action="{{route('articles.update', ['id' => $article->id])}}" method="POST">
        @method('PUT')
        @csrf

        <input type="text" name="title" placeholder="title" value="{{$article->title}}">
        <br>

        <textarea name="description" placeholder="description">{{$article->description}}</textarea>
        <br>

        <textarea name="content" placeholder="content">{{$article->content}}</textarea>
        <input type="submit" name="send" value="send">
    </form>
</main>
</body>
</html>
