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
            ['name' => 'Sport Car', 'slug' => 'sport-car'],
            ['name' => 'Truck', 'slug' => 'truck'],
            ['name' => 'MiniVan/Van', 'slug' => 'minivan-van'],
            ['name' => 'Wagon', 'slug' => 'wagon']
        ]);
    }
}
