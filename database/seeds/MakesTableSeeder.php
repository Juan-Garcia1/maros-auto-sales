<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MakesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('makes')->insert([
            ['name' => 'Acura', 'slug' => 'acura'],
            ['name' => 'Audi', 'slug' => 'audi'],
            ['name' => 'Buick', 'slug' => 'buick'],
            ['name' => 'Cadillac', 'slug' => 'cadillac'],
            ['name' => 'Chevrolet', 'slug' => 'chevrolet'],
            ['name' => 'Dodge', 'slug' => 'dogde'],
            ['name' => 'Ford', 'slug' => 'ford'],
            ['name' => 'GMC', 'slug' => 'gmc'],
            ['name' => 'Honda', 'slug' => 'honda'],
            ['name' => 'Hyundai', 'slug' => 'hyundai'],
            ['name' => 'Hummer', 'slug' => 'hummer'],
            ['name' => 'Infiniti', 'slug' => 'infiniti'],
            ['name' => 'Jeep', 'slug' => 'jeep'],
            ['name' => 'Kia', 'slug' => 'kia'],
            ['name' => 'Lexus', 'slug' => 'lexus'],
            ['name' => 'Lincoln', 'slug' => 'lincoln'],
            ['name' => 'Mazda', 'slug' => 'mazda'],
            ['name' => 'Mercedes', 'slug' => 'mercedes'],
            ['name' => 'Mitsubishi', 'slug' => 'mitsubishi'],
            ['name' => 'Nissan', 'slug' => 'nissan'],
            ['name' => 'Scion', 'slug' => 'scion'],
            ['name' => 'Toyota', 'slug' => 'toyota'],
            ['name' => 'Volkswagon', 'slug' => 'volkswagon'],
        ]);
    }
}
