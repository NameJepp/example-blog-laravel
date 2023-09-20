<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $user = User::factory()->create(['name' => 'John Doe', 'username' => 'johndoe']);
        $category = Category::factory()->create(['name' => 'Personal', 'slug' => 'personal']);
        Post::factory(3)->create(
            [
                'category_id' => $category->id,
                'user_id' => $user->id,
            ]
        );
        Comment::factory(4)->create(['post_id' => 1]);
        Comment::factory(4)->create(['post_id' => 2]);
        Comment::factory(4)->create(['post_id' => 3]);
        Comment::factory(30)->create();
    }
}
