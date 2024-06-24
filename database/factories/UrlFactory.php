<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class UrlFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence,
            'url' => $this->faker->url,
            'short_url' => $this->faker->unique()->slug,
            'clicks' => $this->faker->numberBetween(0, 100),
            'user_id' => 1,
            'expires_at' => $this->faker->dateTimeBetween('now', '+1 year'),
        ];
    }
}
