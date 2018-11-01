<?php

use Illuminate\Database\Seeder;
use App\House;

class HousesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        House::create([
            'name' => 'Gryffindor',
            'professor_id' => 1,
        ]);
        House::create([
            'name' => 'Hufflepuff',
            'professor_id' => 1,
        ]);
        House::create([
            'name' => 'Ravenclaw',
            'professor_id' => 1,
        ]);
        House::create([
            'name' => 'Slytherin',
            'professor_id' => 1,
        ]);
    }
}
