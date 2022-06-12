@foreach($articles as $article)
    <article class="box">
        <a href="{{ route(\Modules\Core\Enums\RoutePath::BLOG_ARTICLE_SHOW_PAGE, ['id' => $article->id]) }}"><h2>{{ $article->title }}</h2></a>
        <img class="post-image" src="{{$article->cover}}">
        <p>
            {{ $article->description }}
        </p>
        <p>
        @include('blog.components.articles.post-counter')
    </article>
@endforeach
