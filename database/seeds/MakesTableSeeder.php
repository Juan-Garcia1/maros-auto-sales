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
            ['name' => 'BMW', 'slug' => 'bmw'],
            ['name' => 'Buick', 'slug' => 'buick'],
            ['name' => 'Cadillac', 'slug' => 'cadillac'],
            ['name' => 'Chevrolet', 'slug' => 'chevrolet'],
            ['name' => 'Chrysler', 'slug' => 'chrysler'],
            ['name' => 'Dodge', 'slug' => 'dogde'],
            ['name' => 'FIAT', 'slug' => 'fiat'],
            ['name' => 'Ford', 'slug' => 'ford'],
            ['name' => 'GMC', 'slug' => 'gmc'],
            ['name' => 'Honda', 'slug' => 'honda'],
            ['name' => 'Hummer', 'slug' => 'hummer'],
            ['name' => 'Hyundai', 'slug' => 'hyundai'],
            ['name' => 'Infiniti', 'slug' => 'infiniti'],
            ['name' => 'Jeep', 'slug' => 'jeep'],
            ['name' => 'Kia', 'slug' => 'kia'],
            ['name' => 'Lexus', 'slug' => 'lexus'],
            ['name' => 'Lincoln', 'slug' => 'lincoln'],
            ['name' => 'Mazda', 'slug' => 'mazda'],
            ['name' => 'Mercedes-Benz', 'slug' => 'mercedes-benz'],
            ['name' => 'Mitsubishi', 'slug' => 'mitsubishi'],
            ['name' => 'Nissan', 'slug' => 'nissan'],
            ['name' => 'Pontiac', 'slug' => 'pontiac'],
            ['name' => 'Ram', 'slug' => 'ram'],
            ['name' => 'Saturn', 'slug' => 'saturn'],
            ['name' => 'Scion', 'slug' => 'scion'],
            ['name' => 'Subaru', 'slug' => 'subaru'],
            ['name' => 'Suzuki', 'slug' => 'suzuki'],
            ['name' => 'Toyota', 'slug' => 'toyota'],
            ['name' => 'Volkswagon', 'slug' => 'volkswagon'],
            ['name' => 'Volvo', 'slug' => 'volvo'],
        ]);
    }
}
