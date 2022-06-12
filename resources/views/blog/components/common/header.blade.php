<div id="header">
    <div id="logo">
        <h1><a href="{{ route(\Modules\Core\Enums\RoutePath::BLOG_HOME_PAGE) }}">{{ env('APP_NAME') }}</a></h1>
    </div>
    <div id="menu">
        <ul>
            <li class="first active"><a href="{{ route(\Modules\Core\Enums\RoutePath::BLOG_HOME_PAGE) }}">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Photos</a></li>
            <li><a href="#">Portfolio</a></li>
            <li class="last"><a href="#">Contact</a></li>
        </ul>
        <br class="clearfix"/>
    </div>
</div>
