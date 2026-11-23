<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('patient_logs', function (Blueprint $table){
            $table->id();

            // Patient relationship
            $table->foreignId('patient_id')
                  ->constrained()
                  ->onDelete('cascade');

            // Log date
            $table->date('log_date');

            // Medicine tracking
            $table->string('medicine_name');
            $table->string('dosage')->nullable();
            $table->time('medicine_time')->nullable();
            $table->boolean('medicine_taken')->default(false);

            // Meal tracking
            $table->enum('meal_type', [
                'breakfast',
                'lunch',
                'dinner',
                'snack'
            ]);
            $table->boolean('meal_completed')->default(false);

            // Optional notes
            $table->text('notes')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patient_logs');
    }
};