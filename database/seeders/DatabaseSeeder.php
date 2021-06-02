<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
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
        Category::factory(5)->create();
        User::factory(5)->create();

        for( $i = 0; $i < 20 ; $i++) {
            Post::factory()->create([
                'user_id' => User::inRandomOrder()->first(),
                'category_id' => Category::inRandomOrder()->first()
            ]);
        }
    }
}
