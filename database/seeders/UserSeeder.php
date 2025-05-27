<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin User',
                'position' => 'Administrator',
                'email' => 'admin@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password123'),
                'role' => 'admin',
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Super Admin',
                'position' => 'Super Administrator',
                'email' => 'superadmin@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('superpassword'),
                'role' => 'super_admin',
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
