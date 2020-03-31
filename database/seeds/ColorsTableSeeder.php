<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ColorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('colors')->insert([
            ['name' => 'black'],
            ['name' => 'blue'],
            ['name' => 'brown'],
            ['name' => 'gray'],
            ['name' => 'green'],
            ['name' => 'orange'],
            ['name' => 'purple'],
            ['name' => 'red'],
            ['name' => 'silver'],
            ['name' => 'tan'],
            ['name' => 'white'],
            ['name' => 'yellow'],
        ]);
    }
}
