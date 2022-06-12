<?php

declare(strict_types=1);

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    public function definition(): array
    {
        $faker = \Faker\Factory::create();

        return [
            'title' => $faker->unique()->text(rand(15, 120)),
            'description' => $faker->unique()->text(255),
            'content' => $faker->unique()->text(64000),
        ];
    }
}
