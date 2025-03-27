<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'mobile_no' => '1234567890',
            'gender' => 'male',
            'password' => Hash::make('12345678'), // Hashing the password
            'role' => 'admin'
        ]);
        User::create([
            'name' => 'teacher',
            'email' => 'teacher@example.com',
            'mobile_no' => '1234567891',
            'gender' => 'male',
            'password' => Hash::make('12345678'), // Hashing the password
            'role' => 'teacher'
        ]);
    }
}
