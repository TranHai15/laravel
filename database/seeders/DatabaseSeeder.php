<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        \App\Models\Account::factory(10)->create();
        \App\Models\Category::factory(5)->create();
        \App\Models\Post::factory(20)->create();
        \App\Models\Comment::factory(50)->create();
        \App\Models\Tag::factory(10)->create();
        \App\Models\Media::factory(10)->create();
    }
}
