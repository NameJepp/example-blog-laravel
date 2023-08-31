<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $title = fake()->unique()->words(3, true),
            'slug' => Str::slug($title),
            'excerpt' => fake()->paragraph,
            'body' => fake()->paragraphs(4, true),
            'category_id' => Category::factory(),
            'user_id' => User::factory(),
        ];
    }
}
