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
        Schema::create('employee_exercises', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('employee_health_id');

            $table->string('nama_latihan');
            $table->integer('durasi_menit')->nullable();
            $table->string('frekuensi')->nullable();

            $table->timestamps();

            $table->foreign('employee_health_id')
                ->references('id')
                ->on('employee_healths')
                ->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee_exercises');
    }
};
