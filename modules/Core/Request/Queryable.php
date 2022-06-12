<?php

declare(strict_types=1);

namespace Modules\Core\Request;

interface Queryable
{
    public function getPage(): int;
    public function getPerPage(): int;
}
