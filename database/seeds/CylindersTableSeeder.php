<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CylindersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cylinders')->insert([
            ['name' => 'Twin-Cylinder'],
            ['name' => 'Three-Cylinder'],
            ['name' => 'Four-Cylinder'],
            ['name' => 'Five-Cylinder'],
            ['name' => 'Six-Cylinder']
        ]);
    }
}
