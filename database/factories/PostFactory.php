<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            "user_id" => User::factory(),
            "title" => $this->faker->text(50),
            "content" => $this->faker->text(500),
            "created_at" => now()
        ];
    }
}
