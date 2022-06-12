<?php

declare(strict_types=1);

namespace Modules\Core\Providers;

use Illuminate\Support\ServiceProvider;

class Bootstrap extends ServiceProvider
{
    public function boot(): void
    {
        $this->app->register(Implementation::class);
    }
}
