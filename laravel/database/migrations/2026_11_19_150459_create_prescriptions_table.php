<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('prescriptions', function (Blueprint $table) {
            $table->id();

            // Patient relationship
            $table->foreignId('patient_id')
                  ->constrained()
                  ->onDelete('cascade');

            // Appointment information
            $table->string('appointment_link')->nullable();

            // Doctor notes
            $table->text('doctor_notes')->nullable();

            // Medication details
            $table->string('medication_name');
            $table->string('dosage');
            $table->string('frequency');
            $table->integer('duration_days')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('prescriptions');
    }
};
