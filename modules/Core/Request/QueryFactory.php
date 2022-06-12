<?php

namespace Modules\Core\Request;

use Illuminate\Http\Request;

interface QueryFactory
{
    public function make(Request $request): Queryable;
}
