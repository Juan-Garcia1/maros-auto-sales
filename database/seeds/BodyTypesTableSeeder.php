<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BodyTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('body_types')->insert([
            ['name' => 'Coupe', 'slug' => 'coupe', 'image' => 'coupe.jpg'],
            ['name' => 'Sedan', 'slug' => 'sedan', 'image' => 'sedan.jpg'],
            ['name' => 'Convertible', 'slug' => 'convertible', 'image' => 'convertible.jpg'],
            ['name' => 'SUV', 'slug' => 'suv', 'image' => 'suv.jpg'],
            ['name' => 'Truck', 'slug' => 'truck', 'image' => 'truck.jpg'],
            ['name' => 'MiniVan/Van', 'slug' => 'minivan-van', 'image' => 'minivan.jpg'],
            ['name' => 'Wagon', 'slug' => 'wagon', 'image' => 'wagon.jpg'],
            ['name' => 'Hatchback', 'slug' => 'hatchback', 'image' => 'hatchback.jpg']
        ]);
    }
}
