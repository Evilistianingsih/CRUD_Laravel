<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category_id' =>Category::inRandomOrder()->first()->id,
            'user_id' =>User::inRandomOrder()->first()->id,
            'title'=>$this->faker->sentence(),
            'slug'=>$this->faker->slug(),
            'content'=>$this->faker->paragraph(),
            'date'=>$this->faker->date(),
        ];
    }
}
