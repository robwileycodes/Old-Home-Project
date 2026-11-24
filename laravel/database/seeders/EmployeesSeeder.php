<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('employees')->insert([
            [
                'employee_id' => 'EMP001',
                'role' => 'doctor',
                'salary' => 85000.00,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}