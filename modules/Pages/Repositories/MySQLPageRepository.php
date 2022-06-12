<?php

declare(strict_types=1);

namespace Modules\Pages\Repositories;

use App\Models\Page;
use Modules\Core\Repositories\Pages;

class MySQLPageRepository implements Pages
{
    public function __construct(
        private readonly Page $model,
    ){
    }

    /**
     * {@inheritDoc}
     */
    public function findByRouteName(string $name): Page
    {
        return $this->model->newQuery()
            ->where('route_name', $name)
            ->firstOrFail();
    }

    public function store(Page $model): Page
    {
        $model->save();

        return $model;
    }

    public function addTags(Page $model, array $tags): Page
    {
        $tags = $model->tags()->saveMany($tags);
        $model->setRelation('tags', $tags);

        return $model;
    }
}
