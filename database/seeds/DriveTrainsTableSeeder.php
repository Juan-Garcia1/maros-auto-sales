<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DriveTrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('drive_trains')->insert([
            ['name' => 'AWD'],
            ['name' => '4WD'],
            ['name' => 'FWD'],
            ['name' => 'RWD'],
        ]);
    }
}
