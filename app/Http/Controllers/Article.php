<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\StoreArticle;
use App\Http\Requests\UpdateArticle;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\View\View;
use App\Models\Article as Model;

class Article
{
    const PER_PAGE = 15;

    public function index(Request $request): View
    {
        // list size, by default - 15
        $perPage = (int)$request->query('perPage', self::PER_PAGE);
        $perPage = $perPage > 100 || $perPage < 1
            ? self::PER_PAGE
            : $perPage;

        $collection = (new Model())
            ->setPerPage($perPage)
            ->orderByDesc('id')
            ->get();

        // render page
        return view('articles.list', [
            'articles' => $collection,
        ]);
    }

    public function show($id): View
    {
        $article = (new Model())->newQuery()->findOrFail((int)$id);

        // render page
        return view('articles.show', [
            'article' => $article,
        ]);
    }

    public function store(StoreArticle $request): RedirectResponse
    {
        $title = $request->get('title');
        $content = $request->get('content');

        $article = new Model();
        $article->title = $title;
        $article->description = Str::substr($content, 0, 120);
        $article->content = $content;
        $article->saveOrFail();

        return redirect(route('articles.list'));
    }

    public function update(UpdateArticle $request, $id): RedirectResponse
    {
        /** @var Model $article */
        $article = (new Model())->newQuery()->findOrFail((int)$id);
        $article->title = $request->get('title');
        $article->description = $request->get('description');
        $article->content = $request->get('content');
        $article->updateOrFail();

        return redirect(route('articles.list'));
    }

    public function createForm(): View
    {
        return view('articles.create');
    }

    public function updateForm($id): View
    {
        $article = (new Model())->newQuery()->findOrFail((int)$id);

        // render page
        return view('articles.update', [
            'article' => $article,
        ]);
    }

    private function content(): string
    {
        return 'Contrary to popular belief, Lorem Ipsum is not simply random text. ' .
            'It has roots in a piece of classical Latin literature from 45 BC, making ' .
            'it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney' .
            ' College in Virginia, looked up one of the more obscure Latin words, consectetur,' .
            ' from a Lorem Ipsum passage, and going through the cites of the word in classical' .
            ' literature, discovered the undoubtable source. Lorem Ipsum comes from sections ' .
            '1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) ' .
            'by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular ' .
            'during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes ' .
            ' from a line in section 1.10.32.';
    }
}
