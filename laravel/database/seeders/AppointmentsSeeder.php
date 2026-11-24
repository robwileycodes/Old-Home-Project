<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AppointmentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('appointments')->insert([
            [
                'patient_id' => 4,
                'doctor_name' => 'Dr. Smith',
                'appointment_date' => now(),
                'status' => 'scheduled',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}