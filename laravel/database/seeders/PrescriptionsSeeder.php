<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PrescriptionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('prescriptions')->insert([
            [
                'patient_id' => 4,
                'appointment_link' => 'https://example.com/appointment',
                'doctor_notes' => 'Take medication daily',
                'medication_name' => 'Aspirin',
                'dosage' => '100mg',
                'frequency' => 'Once Daily',
                'duration_days' => 30,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}