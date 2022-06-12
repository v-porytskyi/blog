<?php

namespace Database\Seeders;

use App\Models\Page;
use App\Models\PageMetaTag;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Modules\Core\Enums\RoutePath;
use \Modules\Core\Repositories\Pages as Repository;

class Pages extends Seeder
{
    private const LIST_OF_PAGES = [
        RoutePath::BLOG_HOME_PAGE,
    ];

    public function run(Repository $repository): void
    {
        $faker = Factory::create();

        foreach (self::LIST_OF_PAGES as $name) {
            try {
                $page = $repository->findByRouteName($name);
            } catch (\Throwable $e) {
                $page = new Page();
                $page->route_name = $name;
                $page->title = $faker->unique()->title;
                $page->description = $faker->unique()->text(255);
                $page->keywords = implode(',', $faker->words(rand(5, 15)));

                $page = $repository->store($page);
            }

            if ($page->tags()->count() === 0) {
                $tag = new PageMetaTag();
                $tag->property = 'og:image';
                $tag->content = 'https://laravel.com/img/logotype.min.svg';

                $repository->addTags($page, [
                    $tag
                ]);
            }
        }
    }
}
