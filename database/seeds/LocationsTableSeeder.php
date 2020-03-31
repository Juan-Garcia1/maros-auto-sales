<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LocationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('locations')->insert([
            ['address' => '4212 W 26th St, Chicago, IL 60623'],
            ['address' => '4813 W Roosevelt Rd, Cicero, IL 60804']
        ]);
    }
}
