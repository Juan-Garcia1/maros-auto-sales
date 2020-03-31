<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\DriveTrain;
use Faker\Generator as Faker;

$factory->define(DriveTrain::class, function (Faker $faker) {
    return [
        'name' => $faker->word
    ];
});
