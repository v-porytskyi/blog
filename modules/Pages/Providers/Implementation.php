<?php

declare(strict_types=1);

namespace Modules\Pages\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Core\Repositories\Pages;
use Modules\Pages\Repositories\MySQLPageRepository;

class Implementation extends ServiceProvider
{
    public function boot(): void
    {
        $this->app->bind(Pages::class, MySQLPageRepository::class);
    }
}
