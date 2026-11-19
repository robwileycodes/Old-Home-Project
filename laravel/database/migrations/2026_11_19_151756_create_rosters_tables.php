<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   
    public function up(): void
    {
        Schema::create('rosters', function (Blueprint $table) {
            $table->id();

            $table->date('roster_date');

            $table->timestamps();
        });

        Schema::create('roster_caregivers', function (Blueprint $table) {
            $table->id();

            $table->foreignId('roster_id')
                  ->constrained('rosters')
                  ->onDelete('cascade');

            $table->foreignId('caregiver_id')
                  ->constrained('employees')
                  ->onDelete('cascade');

            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('roster_caregivers');
        Schema::dropIfExists('rosters');
    }
};