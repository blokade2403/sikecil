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
        Schema::create('fitness_results', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('health_check_id');

            $table->string('metode'); // rockport / lainnya
            $table->float('waktu_tempuh')->nullable();
            $table->float('vo2_max')->nullable();
            $table->string('hasil')->nullable(); // kurang, cukup, baik

            $table->timestamps();

            $table->foreign('health_check_id')
                ->references('id')
                ->on('health_checks')
                ->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fitness_results');
    }
};
