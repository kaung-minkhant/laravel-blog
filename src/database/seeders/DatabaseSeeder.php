<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Article;
use App\Models\User;
use App\Models\Category;
use App\Models\Comment;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Article::factory()->count(20)->create();
        Category::factory()->count(5)->create();
        Comment::factory()->count(40)->create();
        User::factory()->create([
            'name' => 'Kaung',
            'email' => 'kaung@gmail.com'
        ]);
        User::factory()->create([
            'name' => 'Shunn',
            'email' => 'shunn@gmail.com'
        ]);
    }
}
