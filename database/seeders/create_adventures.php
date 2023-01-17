<?php

namespace Database\Seeders;

use App\Models\Adventure;
use Illuminate\Database\Seeder;

class create_adventures extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Adventure::factory()->times(20)->create();
    }
}
