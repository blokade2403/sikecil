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
        Schema::create('apar_checks', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('apar_id');
            $table->uuid('user_id');

            $table->boolean('selang');
            $table->boolean('pengunci');
            $table->boolean('isi_tabung');
            $table->boolean('kondisi_fisik');

            $table->text('catatan')->nullable();

            $table->timestamps();

            $table->foreign('apar_id')->references('id')->on('apars')->cascadeOnDelete();
            $table->foreign('user_id')->references('id')->on('users')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('apar_checks');
    }
};
