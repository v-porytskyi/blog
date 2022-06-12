<?php

declare(strict_types=1);

namespace Modules\Core\Providers;

use Carbon\Laravel\ServiceProvider;
use Modules\Core\Implementation\Request\RequestQuery;
use Modules\Core\Request\QueryFactory;

class Implementation extends ServiceProvider
{
    public function boot(): void
    {
        $this->app->bind(QueryFactory::class, RequestQuery::class);
    }
}
