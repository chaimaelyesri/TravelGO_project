<?php

namespace Database\Seeders;

use App\Models\Activity;
use App\Models\Day;
use App\Models\Adventure;

use Illuminate\Database\Seeder;

class create_days extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Day::factory()->times(5)->create();
    }
}
