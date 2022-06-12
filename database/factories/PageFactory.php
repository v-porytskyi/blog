<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'route_name' => $this->faker->name(),
            'title' => $this->faker->unique()->title(),
            'description' => $this->faker->realTextBetween(120, 255),
            'keywords' => implode(',', $this->faker->words(rand(5, 15))),
        ];
    }
}
