<?php

declare(strict_types=1);

namespace Modules\Articles\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Articles\Repositories\MySQLArticleRepository;
use Modules\Core\Repositories\Articles;

class Implementation extends ServiceProvider
{
    public function boot(): void
    {
        $this->app->bind(Articles::class, MySQLArticleRepository::class);
    }
}
