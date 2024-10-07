<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Book;
use App\Models\Category;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{

  
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence,
            'author' => $this->faker->name,
            'description' => $this->faker->paragraph,
            'is_available' => $this->faker->boolean,
        ];
    }
    public function configure()
    {
        return $this->afterCreating(function (Book $book) {
            $categories = Category::inRandomOrder()->limit(3)->pluck('id');
            $book->categories()->attach($categories);
        });
    }

}
