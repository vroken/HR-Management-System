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
        Schema::create('absensi_jabatan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('absensi_id')->constrained('attedance')->onDelete('cascade');
            $table->foreignId('jabatan_id')->constrained('positions')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('absensi_jabatan');
    }
};
