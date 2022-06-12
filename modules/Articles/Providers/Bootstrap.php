<?php

declare(strict_types=1);

namespace Modules\Articles\Providers;

use Illuminate\Support\ServiceProvider;

class Bootstrap extends ServiceProvider
{
    public function boot(): void
    {
        $this->app->register(Routes::class);
        $this->app->register(Implementation::class);
    }
}
