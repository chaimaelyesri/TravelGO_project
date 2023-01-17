<?php

namespace Database\Seeders;

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
        $this->call([
            create_users::class,
            create_cities::class,
            create_activities::class,
            create_posts::class,
            create_adventures::class,
            create_days::class
        ]);
    }
}
