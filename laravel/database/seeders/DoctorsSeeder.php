<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DoctorsSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('doctors')->insert([
            [
                'first_name' => 'John',
                'last_name' => 'Smith',
                'specialty' => 'Cardiology',
                'phone' => '555-1234',
                'email' => 'jsmith@hospital.com',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}