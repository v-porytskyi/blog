<?php

namespace Modules\Core\Implementation\Request;

use Illuminate\Config\Repository;
use Illuminate\Http\Request;
use Modules\Core\Request\Queryable;
use Modules\Core\Request\QueryFactory;

class RequestQuery implements QueryFactory
{
    public function __construct(
        private readonly Repository $config,
    ) {
    }

    public function make(Request $request): Queryable
    {
        $defaultPerPage = $this->config->get('pagination.perPage', 15);

        $page = (int)$request->query('page', 1);

        $perPage = (int)$request->query('perPage', $defaultPerPage);
        $perPage = $perPage > 100 || $perPage < 1
            ? $defaultPerPage
            : $perPage;

        return new Query($page, $perPage);
    }
}
