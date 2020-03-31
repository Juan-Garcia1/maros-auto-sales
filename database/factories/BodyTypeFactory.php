<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\BodyType;
use Faker\Generator as Faker;

$factory->define(BodyType::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'slug' => $faker->slug
    ];
});
