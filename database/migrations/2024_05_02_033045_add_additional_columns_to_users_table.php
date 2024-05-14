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
        Schema::table('users', function (Blueprint $table) {
            $table->string('employee_id')->unique()->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('jenis_kelamin')->nullable();
            $table->string('alamat')->nullable();
            $table->date('joining_date')->nullable();
            $table->double('gaji')->nullable();
            $table->enum('employee_status', ['active', 'leave', 'terminated'])->nullable();
            $table->string('emergency_contact')->unique()->nullable();
            $table->string('gambar')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn([
                'employee_id',
                'date_of_birth',
                'jenis_kelamin',
                'alamat',
                'joining_date',
                'gaji',
                'employee_status',
                'emergency_contact',
                'gambar',
            ]);
        });
    }
};
