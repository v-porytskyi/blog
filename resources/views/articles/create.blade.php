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

    <h1>Create new post</h1>
    <form action="{{route('articles.store')}}" method="POST">
        @csrf

        <input type="text" name="title" placeholder="title">
        <br>
        <textarea name="content" placeholder="content"></textarea>
        <input type="submit" name="send" value="send">
    </form>
</main>
</body>
</html>
