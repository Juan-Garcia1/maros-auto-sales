<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Vehicle;
use Faker\Generator as Faker;

$factory->define(Vehicle::class, function (Faker $faker) {
    return [
        'make_id' => factory(App\Make::class),
        'model' => $faker->sentence(5, false),
        'year' => $faker->year('now'),
        'type_id' => factory(App\BodyType::class),
        'location_id' => factory(App\Location::class),
        'color_id' => factory(App\Color::class),
        'owners' => $faker->randomDigitNotNull,
        'seats' => $faker->randomDigitNot(8,9),
        'image' => $faker->imageUrl(640, 480, 'transport'),
        'price' => $faker->numberBetween(2000, 15000),
        'mileage' => $faker->numberBetween(20000, 80000),
        'transmission_id' => factory(App\Transmission::class),
        'cylinder_id' => factory(App\Cylinder::class),
        'drivetrain_id' => factory(App\DriveTrain::class),
    ];
});
