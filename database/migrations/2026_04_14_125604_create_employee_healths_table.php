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
        Schema::create('employee_healths', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('health_check_id');
            $table->uuid('user_id');

            $table->float('berat_badan');
            $table->float('tinggi_badan');
            $table->float('imt')->nullable();
            $table->string('kategori_imt')->nullable();

            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->cascadeOnDelete();
            $table->foreign('health_check_id')->references('id')->on('health_checks')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee_healths');
    }
};
