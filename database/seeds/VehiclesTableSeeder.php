<?php

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class VehiclesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Sold Vehicles
        $faker = Faker::create();
        foreach (range(1, 50) as $index) {
            DB::table('vehicles')->insert([
                'make_id' => rand(1, 32),
                'vin' => $faker->regexify('([A-Z0-9]{17})'),
                'model' => $faker->sentence(5, false),
                'year' => rand(2000, 2019),
                'type_id' => rand(1, 8),
                'location_id' => rand(1, 2),
                'color_id' => rand(1, 12),
                'owners' => rand(1, 4),
                'seats' => rand(2, 7),
                'image' => $faker->imageUrl(640, 480, 'transport'),
                'price' => $faker->numberBetween(5000, 18000),
                'mileage' => $faker->numberBetween(20000, 80000),
                'transmission_id' => rand(1, 2),
                'cylinder_id' => rand(1, 5),
                'drivetrain_id' => rand(1, 4),
                'sold_at' => Carbon::now()->subMonths(rand(4, 6))->subDays(rand(1, 28))
            ]);
        }
        // Inventory
        DB::table('vehicles')->insert([
            [
                'make_id' => 1,
                'vin' => $faker->regexify('([A-Z0-9]{17})'),
                'model' => 'TLX',
                'year' => 2017,
                'type_id' => 2,
                'location_id' => 1,
                'color_id' => 1,
                'owners' => rand(1, 3),
                'seats' => 5,
                'image' => 'acura-tlx-2017.jpg',
                'price' => 16245,
                'mileage' => 29867,
                'transmission_id' => 1,
                'cylinder_id' => 3,
                'drivetrain_id' => 3,
            ],
            [
                'make_id' => 1,
                'vin' => $faker->regexify('([A-Z0-9]{17})'),
                'model' => 'ILX',
                'year' => 2016,
                'type_id' => 2,
                'location_id' => 1,
                'color_id' => 11,
                'owners' => rand(1, 3),
                'seats' => 5,
                'image' => 'acura-ilx-2016.jpg',
                'price' => 13900,
                'mileage' => 43888,
                'transmission_id' => 1,
                'cylinder_id' => 3,
                'drivetrain_id' => 3,
            ],
            [
                'make_id' => 1,
                'vin' => $faker->regexify('([A-Z0-9]{17})'),
                'model' => 'RDX',
                'year' => 2017,
                'type_id' => 4,
                'location_id' => 2,
                'color_id' => 11,
                'owners' => rand(1, 3),
                'seats' => 5,
                'image' => 'acura-tlx-2017.jpg',
                'price' => 21475,
                'mileage' => 39390,
                'transmission_id' => 1,
                'cylinder_id' => 5,
                'drivetrain_id' => 1,
            ],
            [
                'make_id' => 2,
                'vin' => $faker->regexify('([A-Z0-9]{17})'),
                'model' => 'S5',
                'year' => 2010,
                'type_id' => 3,
                'location_id' => 2,
                'color_id' => 1,
                'owners' => rand(1, 3),
                'seats' => 4,
                'image' => 'audi-s5-2010.jpg',
                'price' => 14888,
                'mileage' => 80544,
                'transmission_id' => 1,
                'cylinder_id' => 5,
                'drivetrain_id' => 1,
            ],
            [
                'make_id' => 2,
                'vin' => $faker->regexify('([A-Z0-9]{17})'),
                'model' => 'A6',
                'year' => 2012,
                'type_id' => 2,
                'location_id' => 1,
                'color_id' => 9,
                'owners' => rand(1, 3),
                'seats' => 5,
                'image' => 'audi-a6-2012.jpg',
                'price' => 13755,
                'mileage' => 74632,
                'transmission_id' => 1,
                'cylinder_id' => 5,
                'drivetrain_id' => 1,
            ],
            [
                'make_id' => 6,
                'vin' => $faker->regexify('([A-Z0-9]{17})'),
                'model' => 'Sonic',
                'year' => 2012,
                'type_id' => 8,
                'location_id' => 2,
                'color_id' => 11,
                'owners' => rand(1, 3),
                'seats' => 5,
                'image' => 'chevrolet-sonic-2012.jpg',
                'price' => 3995,
                'mileage' => 120879,
                'transmission_id' => 1,
                'cylinder_id' => 3,
                'drivetrain_id' => 3,
            ],
            [
                'make_id' => 6,
                'vin' => $faker->regexify('([A-Z0-9]{17})'),
                'model' => 'Equinox',
                'year' => 2018,
                'type_id' => 4,
                'location_id' => 1,
                'color_id' => 9,
                'owners' => rand(1, 3),
                'seats' => 5,
                'image' => 'chevrolet-equinox-2018.jpg',
                'price' => 16200,
                'mileage' => 21889,
                'transmission_id' => 1,
                'cylinder_id' => 3,
                'drivetrain_id' => 3,
            ],
            [
                'make_id' => 6,
                'vin' => $faker->regexify('([A-Z0-9]{17})'),
                'model' => 'Camaro',
                'year' => 2017,
                'type_id' => 1,
                'location_id' => 2,
                'color_id' => 8,
                'owners' => rand(1, 3),
                'seats' => 4,
                'image' => 'chevrolet-camaro-2017.jpg',
                'price' => 16999,
                'mileage' => 28677,
                'transmission_id' => 2,
                'cylinder_id' => 3,
                'drivetrain_id' => 4,
            ],
            [
                'make_id' => 6,
                'vin' => $faker->regexify('([A-Z0-9]{17})'),
                'model' => 'Silverado 1500',
                'year' => 2012,
                'type_id' => 5,
                'location_id' => 1,
                'color_id' => 11,
                'owners' => rand(1, 3),
                'seats' => 5,
                'image' => 'chevrolet-silverado-1500-2012.jpg',
                'price' => 15400,
                'mileage' => 108245,
                'transmission_id' => 1,
                'cylinder_id' => 5,
                'drivetrain_id' => 2,
            ],
            [
                'make_id' => 6,
                'vin' => $faker->regexify('([A-Z0-9]{17})'),
                'model' => 'Malibu',
                'year' => 2018,
                'type_id' => 2,
                'location_id' => 1,
                'color_id' => 11,
                'owners' => rand(1, 3),
                'seats' => 5,
                'image' => 'chevrolet-malibu-2018.jpg',
                'price' => 12695,
                'mileage' => 48365,
                'transmission_id' => 1,
                'cylinder_id' => 3,
                'drivetrain_id' => 3,
            ]
        ]);
    }
}