<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

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
                'name' => 'Andrés',
                'email' => 'pruebas@gmail.com',
                'password' => '$2y$10$3N0NFFrYMGYWaEE2jbIgVOg6upw8a5/GljzIew9.1P5mID0pTdItW',
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => '$2y$10$3N0NFFrYMGYWaEE2jbIgVOg6upw8a5/GljzIew9.1P5mID0pTdItW',
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
