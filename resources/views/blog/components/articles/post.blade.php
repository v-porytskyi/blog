<article class="box">
    <h2>{{ $article->title }}</h2>
    <section>
        {{ $article->content }}
    </section>
    <footer>
        <time datetime="{{ $article->created_at }}">{{ $article->created_at->format('Y-m-d H:i:s') }}</time>
    </footer>
</article>
