<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();

            // Patient relationship
            $table->foreignId('patient_id')
                  ->constrained()
                  ->onDelete('cascade');

            // Doctor relationship
            $table->string('doctor_name');

            // Appointment details
            $table->dateTime('appointment_date');

            // Appointment status
            $table->enum('status', [
                'scheduled',
                'completed',
                'cancelled'
            ])->default('scheduled');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};