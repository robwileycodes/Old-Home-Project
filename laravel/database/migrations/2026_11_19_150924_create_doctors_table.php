<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DefaultAccountsSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('healthcare_users')->insert([
            [
                'first_name' => 'Admin',
                'last_name' => 'User',
                'email' => 'admin@test.com',
                'password' => Hash::make('password'),
                'role' => 'admin',
                'approval_status' => 'approved',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'first_name' => 'Doctor',
                'last_name' => 'User',
                'email' => 'doctor@test.com',
                'password' => Hash::make('password'),
                'role' => 'doctor',
                'approval_status' => 'approved',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'first_name' => 'Caregiver',
                'last_name' => 'User',
                'email' => 'caregiver@test.com',
                'password' => Hash::make('password'),
                'role' => 'caregiver',
                'approval_status' => 'approved',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'first_name' => 'Patient',
                'last_name' => 'User',
                'email' => 'patient@test.com',
                'password' => Hash::make('password'),
                'role' => 'patient',
                'approval_status' => 'approved',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}