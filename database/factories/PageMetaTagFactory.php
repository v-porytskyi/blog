<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PageMetaTagFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'property' => $this->faker->unique()->words(1, true),
            'content' => $this->faker->unique()->words(1, true),
        ];
    }
}
