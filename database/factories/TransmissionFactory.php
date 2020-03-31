<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Transmission;
use Faker\Generator as Faker;

$factory->define(Transmission::class, function (Faker $faker) {
    return [
        'name' => $faker->word
    ];
});
