<?php

use Faker\Generator as Faker;
use App\Author;

$factory->define(Author::class, function (Faker $faker) {
    return [
        'name' => $faker->firstName,
        'last_name' => $faker->lastName,
    ];
});
