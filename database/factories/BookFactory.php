<?php

use Faker\Generator as Faker;
use App\Book;

$factory->define(Book::class, function (Faker $faker) {
    return [
        'name' => $faker->company,
        'cost' => rand(1,100),
        'price' => rand(1,1000),
        'description' => $faker->paragraph,
        'isbn' => $faker->isbn13,
    ];
});
