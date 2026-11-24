<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            if (!Schema::hasColumn('users', 'first_name')) {
                $table->string('first_name')->nullable();
            }
            if (!Schema::hasColumn('users', 'last_name')) {
                $table->string('last_name')->nullable();
            }
            if (!Schema::hasColumn('users', 'phone')) {
                $table->string('phone')->nullable();
            }
            if (!Schema::hasColumn('users', 'date_of_birth')) {
                $table->date('date_of_birth')->nullable();
            }
            if (!Schema::hasColumn('users', 'role')) {
                $table->string('role')->nullable();
            }
            if (!Schema::hasColumn('users', 'family_code')) {
                $table->string('family_code')->nullable();
            }
            if (!Schema::hasColumn('users', 'relation_to_emergency_contact')) {
                $table->string('relation_to_emergency_contact')->nullable();
            }
            if (!Schema::hasColumn('users', 'emergency_contact')) {
                $table->string('emergency_contact')->nullable();
            }
            if (!Schema::hasColumn('users', 'approval_status')) {
                $table->string('approval_status')->default('pending');
            }
            if (Schema::hasColumn('users', 'password')) {
                $table->string('password')->nullable()->change();
            }
        });
    }

    public function down(): void
    {
        $columns = [
            'first_name',
            'last_name',
            'phone',
            'date_of_birth',
            'role',
            'family_code',
            'relation_to_emergency_contact',
            'emergency_contact',
            'approval_status',
        ];

        $existing = array_values(array_filter($columns, function ($col) {
            return Schema::hasColumn('users', $col);
        }));

        if (!empty($existing)) {
            Schema::table('users', function (Blueprint $table) use ($existing) {
                $table->dropColumn($existing);
            });
        }
    }
};