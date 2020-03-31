<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Cylinder;
use Faker\Generator as Faker;

$factory->define(Cylinder::class, function (Faker $faker) {
    return [
        'name' => $faker->word
    ];
});
