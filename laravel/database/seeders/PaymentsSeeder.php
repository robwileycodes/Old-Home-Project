<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('payments')->insert([
            [
                'patient_id' => 4,
                'total_due' => 150.00,
                'last_updated_date' => now()->toDateString(),
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}