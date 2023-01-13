<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;
use \App\Models\User;
use \App\Models\Post;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $user = User::factory()->create(['name' => 'Jhon Doe', 'username' => 'jhonDoe']);
        $category = Category::factory()->create();
        Category::factory(2)->create();

        Post::factory(30)->create(['user_id' => $user->id, 'category_id' => $category->id]);
    }
}
