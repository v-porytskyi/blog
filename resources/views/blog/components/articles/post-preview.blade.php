@foreach($articles as $article)
    <div class="box">
        <a href="{{ route(\Modules\Core\Enums\RoutePath::BLOG_ARTICLE_SHOW_PAGE, ['id' => $article->id]) }}"><h2>{{ $article->title }}</h2></a>
        <p>
            {{ $article->description }}
        </p>
    </div>
@endforeach
