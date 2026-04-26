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
        Schema::create('fitness_categories', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('nama');
            $table->float('min_vo2', 10, 2);
            $table->float('max_vo2', 10, 2);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fitness_categories');
    }
};
