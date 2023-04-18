<?php

namespace Database\Factories;

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
        $title = fake()->realText(50);
        $slug = Str::slug($title);
        $thumbnail = fake()->imageUrl;
        $description = fake()->realText(4000);
        $active = fake()->boolean;
        $published_at = fake()->dateTime;
        $user_id = 1;

        return [
            'title'         =>  $title,
            'slug'          =>  $slug,
            'thumbnail'     =>  $thumbnail,
            'description'   =>  $description,
            'active'        =>  $active,
            'published_at'  =>  $published_at,
            'user_id'       =>  $user_id
        ];
    }
}
