<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'=> $this->faker->sentence(),
            'user_id' => User::factory(),
            'slug' => $this->faker->slug(),
            'category_id'=> Category::factory(),
            'excerpt' => $this->faker->sentence(),
            'body' => $this->faker->paragraph(5)
        ];
    }
}
