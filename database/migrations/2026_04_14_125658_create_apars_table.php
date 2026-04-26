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
        Schema::create('apars', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('kode_qr')->unique();
            $table->string('lokasi');
            $table->string('ukuran');
            $table->string('kondisi');
            $table->date('expire_date')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('apars');
    }
};
