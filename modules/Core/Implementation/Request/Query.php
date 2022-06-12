<?php

namespace Modules\Core\Implementation\Request;

use Modules\Core\Request\Queryable;

class Query implements Queryable
{
    public function __construct(
        private readonly int $page,
        private readonly int $perPage
    ) {
    }

    /**
     * @return int
     */
    public function getPage(): int
    {
        return $this->page;
    }

    /**
     * @return int
     */
    public function getPerPage(): int
    {
        return $this->perPage;
    }
}
