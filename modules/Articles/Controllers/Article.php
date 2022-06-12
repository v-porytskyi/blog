<?php

declare(strict_types=1);

namespace Modules\Articles\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Modules\Core\Repositories\Articles;
use Modules\Core\Request\QueryFactory;

class Article
{
    public function __construct(
        private readonly QueryFactory $factory,
        private readonly Articles $articles,
    ) {
    }

    public function index(Request $request): View
    {
        $query = $this->factory->make($request);
        $articles = $this->articles->paginate($query);

        return view('blog.pages.articles', [
            'articles' => $articles,
        ]);
    }

    public function show(string $id)
    {
        $article = $this->articles->findById((int)$id);

        return view('blog.pages.article', [
            'article' => $article,
        ]);
    }
}
