<?php

declare(strict_types=1);

namespace Modules\Articles\Providers;

use Illuminate\Http\Request;
use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider;
use Modules\Articles\Controllers\Article;
use Modules\Core\Enums\RoutePath;

class Routes extends ServiceProvider
{
    public function boot(): void
    {
        /** @var Router $router */
        $router = $this->app->make(Router::class);

        $router->addRoute(Request::METHOD_GET, '/articles', Article::class . '@index')
            ->name(RoutePath::BLOG_ARTICLE_PAGE);

        $router->addRoute(Request::METHOD_GET, '/articles/{id}', Article::class . '@show')
            ->where('id', '[0-9]+')
            ->name(RoutePath::BLOG_ARTICLE_SHOW_PAGE);
    }
}
