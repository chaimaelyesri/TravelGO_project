<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;


class create_users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'firstname'=> 'Admin',
            'lastname'=> 'Admin',
            'email'=> 'admin@gmail.com',
            'password'=> Hash::make('12345678'),
            'is_admin'=> 1
        ]);

        DB::table('users')->insert([
            'firstname'=> 'Customer',
            'lastname'=> 'hanane',
            'email'=> 'customer@gmail.com',
            'password'=> Hash::make('12345678'),
            'is_admin'=> 0
        ]);

    }
}
