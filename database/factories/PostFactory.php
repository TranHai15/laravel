<?php

namespace Database\Factories;

use App\Models\Account;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

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

    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'slug' => $this->faker->slug,
            'content' => $this->faker->paragraphs(5, true),
            'image' => $this->faker->imageUrl(),
            'category_id' => Category::inRandomOrder()->first()->id,
            'account_id' => Account::inRandomOrder()->first()->id,
            'status' => 'published',
            'views' => rand(0, 500),
        ];
    }
}
