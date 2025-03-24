<?php

namespace Database\Factories;

use App\Models\Account;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'post_id' => Post::inRandomOrder()->first()->id,
            'account_id' => Account::inRandomOrder()->first()->id,
            'content' => $this->faker->sentence,
            'status' => 'approved',
        ];
    }
}
