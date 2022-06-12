<article class="box">
    <h2>{{ $article->title }}</h2>
    <img class="post-image" src="{{$article->cover}}">

    {!! $article->content !!}
    <footer>
        @include('blog.components.articles.post-counter')
        <br class="clearfix">
        <p>Created at: <time datetime="{{ $article->created_at }}">{{ $article->created_at->format('Y-m-d H:i:s') }}</time></p>
    </footer>
</article>
