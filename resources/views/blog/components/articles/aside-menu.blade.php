<div class="box">
    <h3>Popular categories</h3>
    <p>
        Morbi lorem ante sodales primis ultrices justo. Enim id cubilia arcu posuere arcu phasellus
        eleifend.
    </p>
    <ul class="list">
        <li class="first"><a href="#">Lobortis magna nisi parturient</a></li>
        <li><a href="#">Fusce laoreet odio pulvinar</a></li>
        <li class="last"><a href="#">Turpis lacus lectus iaculis</a></li>
    </ul>
</div>

@if(isset($popular))
<div class="box">
    <h3>Popular Articles</h3>
    <ul class="list">
        @foreach($popular as $popularArticle)
            <li class="first"><a
                    href="{{route(\Modules\Core\Enums\RoutePath::BLOG_ARTICLE_SHOW_PAGE, ['id' => $popularArticle->id])}}">{{$popularArticle->title}}</a>
            </li>
        @endforeach
    </ul>
</div>
@endif

