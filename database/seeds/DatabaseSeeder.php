<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(BodyTypesTableSeeder::class);
        $this->call(ColorsTableSeeder::class);
        $this->call(CylindersTableSeeder::class);
        $this->call(LocationsTableSeeder::class);
        $this->call(MakesTableSeeder::class);
        $this->call(TransmissionsTableSeeder::class);
        $this->call(DriveTrainsTableSeeder::class);
    }
}
