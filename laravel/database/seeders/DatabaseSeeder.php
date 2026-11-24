<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            DefaultAccountsSeeder::class,
            DoctorsSeeder::class,
            EmployeesSeeder::class,
            AppointmentsSeeder::class,
            PaymentsSeeder::class,
            PrescriptionsSeeder::class,
            PatientLogsSeeder::class,
        ]);
    }
}