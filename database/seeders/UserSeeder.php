<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert([
            [
               'name' => 'Admin Muhammed',
               'email' => 'admin@gmail.com',
               'password' => Hash::make('Pa$$w0rd!'),
               'role' => 'admin'
            ],
            [
                'name' => 'User Sumon',
                'email' => 'user@gmail.com',
                'password' => Hash::make('Pa$$w0rd!'),
                'role' => 'user'
            ],
        ]);
    }
}
