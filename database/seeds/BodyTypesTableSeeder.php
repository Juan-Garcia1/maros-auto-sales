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
            ['name' => 'Coupe', 'slug' => 'coupe'],
            ['name' => 'Sedan', 'slug' => 'sedan'],
            ['name' => 'Convertible', 'slug' => 'convertible'],
            ['name' => 'SUV', 'slug' => 'suv'],
            ['name' => 'Truck', 'slug' => 'truck'],
            ['name' => 'MiniVan/Van', 'slug' => 'minivan-van'],
            ['name' => 'Wagon', 'slug' => 'wagon'],
            ['name' => 'Hatchback', 'slug' => 'hatchback']
        ]);
    }
}
