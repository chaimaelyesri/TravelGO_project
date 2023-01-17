<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Seeder;

class create_cities extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        City::factory()->times(10)->create();
    }
}
