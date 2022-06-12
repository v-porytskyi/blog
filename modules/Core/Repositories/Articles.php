<?php

declare(strict_types=1);

namespace Modules\Core\Repositories;

use App\Models\Article;
use Illuminate\Contracts\Pagination\Paginator;
use Modules\Core\Request\Queryable;

interface Articles
{
    /**
     * @param Queryable $queryable
     * @return Paginator
     */
    public function paginate(Queryable $queryable): Paginator;

    /**
     * @param int $id
     * @return Article
     */
    public function findById(int $id): Article;
}
