<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'John "The Admin" Black',
                'email' => 'admin@gmail.com',
                'email_verified_at' => now(),
                'password' => bcrypt('password'),
                'role' => 'admin',
                'remember_token' => Str::random(10),
            ],
            [
                'name' => 'John "The User" White',
                'email' => 'user@gmail.com',
                'email_verified_at' => now(),
                'password' => bcrypt('password'),
                'role' => 'user',
                'remember_token' => Str::random(10),
            ]
        ]);
    }
}
