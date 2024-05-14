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
            $table->string('tunjangan_jabatan')->nullable();
            $table->string('lembur')->nullable();
            $table->string('uang_makan')->nullable();
            $table->string('pot_bpjs')->nullable();
            $table->string('pot_pajak')->nullable();
            $table->string('pot_jht')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('tunjangan_jabatan');
            $table->dropColumn('lembur');
            $table->dropColumn('uang_makan');
            $table->dropColumn('pot_bpjs');
            $table->dropColumn('pot_pajak');
            $table->dropColumn('pot_jht');
        });
    }
};
