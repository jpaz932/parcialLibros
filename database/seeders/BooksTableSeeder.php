<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::create([
            'title' => 'The Great Gatsby',
            'author' => 'F. Scott Fitzgerald',
            'description' => 'The story of the fabulously wealthy Jay Gatsby and his love for the beautiful Daisy Buchanan.',
            'publication_year' => 1925,
            'publisher' => 'Charles Scribner\'s Sons',
            'page_count' => 180,
            'price' => 9.99,
        ]);

        Book::create([
            'title' => 'To Kill a Mockingbird',
            'author' => 'Harper Lee',
            'description' => 'The unforgettable novel of a childhood in a sleepy Southern town and the crisis of conscience that rocked it.',
            'publication_year' => 1960,
            'publisher' => 'J.B. Lippincott & Co.',
            'page_count' => 281,
            'price' => 12.99,
        ]);

        //Factory
        Book::factory()->count(5)->create();
    }
}
