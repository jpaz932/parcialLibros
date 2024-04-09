<?php

namespace Database\Factories;

use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;

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
    protected $model = Book::class;
    
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence,
            'author' => $this->faker->name,
            'description' => $this->faker->paragraph,
            'publication_year' => $this->faker->numberBetween(1800, (int)date('Y')),
            'publisher' => $this->faker->company,
            'page_count' => $this->faker->numberBetween(50, 1000),
            'price' => $this->faker->randomFloat(2, 5, 100)
        ];
    }
}
