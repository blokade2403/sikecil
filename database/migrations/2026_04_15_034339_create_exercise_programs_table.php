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
        Schema::create('exercise_programs', function (Blueprint $table) {

            $table->uuid('id')->primary();

            $table->foreignUuid('health_check_id')
                ->constrained('health_checks')
                ->cascadeOnDelete();

            $table->string('frekuensi')->nullable();
            $table->integer('denyut_nadi')->nullable();
            $table->integer('durasi')->nullable();
            $table->string('tipe_latihan')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exercise_programs');
    }
};
