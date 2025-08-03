<?php

namespace Database\Factories;

use App\Models\Category;
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
        $title = fake()->sentence();
        $slug = Str::slug($title);

        return [
            'category_id' => Category::inRandomOrder()->first('id') ?? Category::factory(),
            'title' => $title,
            'content' => fake()->sentence(4),
            'slug' => $slug,
        ];
    }
}
