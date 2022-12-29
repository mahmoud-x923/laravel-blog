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

        $user = User::factory()->create(['name' => 'Mahmoud Othman', 'username' => 'mahmoudOthman']);
        Post::factory(5)->create(['user_id' => $user->id]);
    }
}
