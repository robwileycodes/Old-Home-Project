<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PatientLogsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('patient_logs')->insert([
            [
                'patient_id' => 4,
                'log_date' => now()->toDateString(),
                'medicine_name' => 'Aspirin',
                'dosage' => '100mg',
                'medicine_time' => '08:00:00',
                'medicine_taken' => true,
                'meal_type' => 'breakfast',
                'meal_completed' => true,
                'notes' => 'No issues reported',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}