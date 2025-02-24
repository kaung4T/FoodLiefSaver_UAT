<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            // Admin
            [
                'name' => 'Admin',
                'username' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('111'),
                'address' => 'Yangon',
                'number' => '09796110593',
                'country' => 'Myanmar',
                'role' => 'admin',
                'status' => 'active',
            ],

            // Agent
            [
                'name' => 'Agent',
                'username' => 'agent',
                'email' => 'agent@gmail.com',
                'password' => Hash::make('111'),
                'address' => 'Mandalay',
                'number' => '09796110593',
                'country' => 'Myanmar',
                'role' => 'agent',
                'status' => 'active',
            ],

            // User
            [
                'name' => 'User',
                'username' => 'user',
                'email' => 'user@gmail.com',
                'password' => Hash::make('111'),
                'address' => 'Naypyitaw',
                'number' => '09969685093',
                'country' => 'Myanmar',
                'role' => 'user',
                'status' => 'active',
            ]

        ]);
    }
}
