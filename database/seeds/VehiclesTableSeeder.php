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
    }
}
