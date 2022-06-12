<?php

declare(strict_types=1);

namespace Modules\Core\Repositories;

use App\Models\Page;
use App\Models\PageMetaTag;
use Illuminate\Database\Eloquent\ModelNotFoundException;

interface Pages
{
    /**
     * @param string $name
     * @return Page
     * @throws ModelNotFoundException
     */
    public function findByRouteName(string $name): Page;

    /**
     * @param Page $model
     * @return Page
     */
    public function store(Page $model): Page;

    /**
     * @param Page $model
     * @param array<int,PageMetaTag> $tags
     * @return Page
     */
    public function addTags(Page $model, array $tags): Page;
}
