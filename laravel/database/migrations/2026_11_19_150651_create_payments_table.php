<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();

            // Patient relationship
            $table->foreignId('patient_id')
                  ->constrained('healthcare_users')
                  ->onDelete('cascade');

            // Payment information
            $table->decimal('total_due', 10, 2)->default(0.00);
            $table->date('last_updated_date');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};