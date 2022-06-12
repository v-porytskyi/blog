<?php

declare(strict_types=1);

namespace Modules\Articles\Repositories;

use App\Models\Article;
use Illuminate\Contracts\Pagination\Paginator;
use Modules\Core\Repositories\Articles;
use Modules\Core\Request\Queryable;

class MySQLArticleRepository implements Articles
{
    public function __construct(
        private readonly Article $model,
    ) {
    }

    public function paginate(Queryable $queryable): Paginator
    {
        return $this->model->newQuery()->paginate($queryable->getPerPage());
    }

    public function findById(int $id): Article
    {
        return $this->model->newQuery()->findOrFail($id);
    }
}
