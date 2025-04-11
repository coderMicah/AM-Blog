<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\User;

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
        $title = fake()->sentence(5, true);
        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'posterImgUrl' => 'https://picsum.photos/seed/' . fake()->uuid() . '/600/400',
            'featured' => fake()->boolean(30),
            'description' => fake()->text(),
            'content' => fake()->realText(),
            'author_id' => User::factory()
        ];
    }
}
