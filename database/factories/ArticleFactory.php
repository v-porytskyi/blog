<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Article;
use Faker\Generator;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    private const POST_COVER_IMAGES = [
        'https://www.nestle.com/sites/default/files/styles/da_vinci_header_hero_desktop/public/2022-02/sustainability-nature-forest-river-article-header-fw.jpg?h=a612ed85&itok=1mqqgg1L',
        'https://www.nestle.com/sites/default/files/styles/full_width_image_1920x795_/public/sustainability-nature-forest-fog-article-header-fw.jpg?itok=xt7ft0gw',
        'https://www.nestle.com/sites/default/files/styles/full_width_image_1920x795_/public/sustainability-nature-deforestation-free-article-header-fw.jpg?itok=aQUUQvoP',
        'https://www.nestle.com/sites/default/files/styles/full_width_image_1920x795_/public/sustainability-nature-landscape-forest-article-header-fw.jpg?itok=77GihmGr',
        'https://www.nestle.com/sites/default/files/styles/banner_image_slider_style/public/cocoa-shades-banner-new.jpg?h=f3deea6a&itok=9trzMQUA',
        'https://www.nestle.com/sites/default/files/styles/banner_image_slider_style/public/forest-footprint-banner3.jpg?h=33ea6421&itok=L8Kw2Z-j',
    ];

    private const POST_IMAGES = [
        'https://process.images.nathab.com/A6dTpd53SmIg0pBfJJhgAz/resize=width:864/quality=value:60/cache=expiry:31536000/compress/https://www.nathab.com/uploaded-files/AdobeStock_115649942.jpg',
        'https://xoxobella.com/wp-content/uploads/2020/08/instagram_captions_for_nature_photos-2.jpg',
        'https://media.istockphoto.com/photos/touch-of-fresh-moss-in-the-forest-picture-id1283852667?k=20&m=1283852667&s=612x612&w=0&h=wyNSSk3yPxdwSnRv-Orr4ar5xS9FrhXIVsgw37TIbj4=',
        'https://images.theconversation.com/files/292780/original/file-20190917-19083-9zi9jy.jpg?ixlib=rb-1.1.0&rect=350%2C0%2C3337%2C2268&q=45&auto=format&w=926&fit=clip',
        'https://greatergood.berkeley.edu/images/uploads/Waterfall_2.jpg',
        'https://images.unsplash.com/photo-1578249949606-334a0dd4dd8b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8dXNhJTIwbmF0dXJlfGVufDB8fDB8fA%3D%3D&w=1000&q=80',
        'https://ichef.bbci.co.uk/news/976/cpsprodpb/10540/production/_106608866_gettyimages-611624008.jpg',
    ];

    public function definition(): array
    {
        $faker = \Faker\Factory::create();
        $description = $this->description($faker);

        return [
            'title' => $faker->unique()->text(rand(15, 120)),
            'cover' => $this->cover(),
            'description' => $description,
            'content' => $this->content($faker, $description),
            'likes' => rand(0, PHP_INT_MAX),
            'dislikes' => rand(0, PHP_INT_MAX),
            'view' => rand(0, PHP_INT_MAX),
            'status' => Article::STATUS_PUBLISHED,
        ];
    }

    private function description(Generator $faker): string
    {
        return $faker->unique()->text(255);
    }

    private function content(Generator $faker, string $description): string
    {
        $content = "<p>{$description}</p>\n";
        $minLen = 250;
        $maxLen = rand($minLen, 550);

        $sections = rand(1, (int)floor(32000 / $maxLen));

        for ($i = 0; $i <= $sections; $i++) {
            $content .= $this->section($faker, $minLen, $maxLen);
        }

        return nl2br($content);
    }

    private function section(Generator $faker, int $minLen, int $maxLen): string
    {
        $section = '';
        if (rand(0, 1)) {
            $section .= "<h3>{$faker->sentence(rand(3,9))}</h3>";
        }

        if (rand(0, 1)) {
            $img = self::POST_IMAGES[rand(0, count(self::POST_IMAGES) - 1)];
            $section .= "<img class=\"post-image\" src=\"{$img}\">";
        }

        $section .= "<p>{$faker->unique()->text(rand($minLen, $maxLen))}</p>\n";

        return $section;
    }

    private function cover(): string
    {
        return self::POST_COVER_IMAGES[rand(0, count(self::POST_COVER_IMAGES) - 1)];
    }
}
