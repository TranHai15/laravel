<?php

namespace Database\Factories;

use App\Models\Account;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Media>
 */
class MediaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition()
    {
        return [
            'file_name' => $this->faker->word . '.jpg',
            'file_url' => $this->faker->imageUrl(),
            'post_id' => Post::inRandomOrder()->first()->id,
            'uploaded_by' => Account::inRandomOrder()->first()->id,
        ];
    }
}
