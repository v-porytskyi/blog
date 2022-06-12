<div id="header">
    <div id="logo">
        <h1><a href="{{ route(\Modules\Core\Enums\RoutePath::BLOG_HOME_PAGE) }}">{{ env('APP_NAME') }}</a></h1>
    </div>
    <div id="menu">
        <ul>
            <li @if(\Request::route()->getName() === \Modules\Core\Enums\RoutePath::BLOG_HOME_PAGE) class="first active" @endif><a href="{{ route(\Modules\Core\Enums\RoutePath::BLOG_HOME_PAGE) }}">Home</a></li>
            <li @if(\Request::route()->getName() === \Modules\Core\Enums\RoutePath::BLOG_ARTICLE_PAGE) class="first active" @endif><a href="{{ route(\Modules\Core\Enums\RoutePath::BLOG_ARTICLE_PAGE) }}">Articles</a></li>
            <li><a href="#">Photos</a></li>
            <li><a href="#">Portfolio</a></li>
            <li class="last"><a href="#">Contact</a></li>
        </ul>
        <br class="clearfix"/>
    </div>
</div>
