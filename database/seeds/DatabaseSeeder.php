<?php

use Illuminate\Database\Seeder;
use App\Author;
use App\Category;
use App\Book;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $authors = factory(Author::class)->times(10)->create();
        $categories = factory(Category::class)->times(10)->create();
        $books = factory(Book::class)->times(10)->create([

            'author_id' => Author::inRandomOrder()->first()->id,
            'category_id' => Category::inRandomOrder()->first()->id,

        ]);
    }
}
