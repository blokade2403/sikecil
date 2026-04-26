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
        Schema::create('employees', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('user_id')->nullable(); // bisa null (pegawai tanpa akun)
            $table->string('nip')->unique();
            $table->string('nama');
            $table->date('tanggal_lahir')->nullable();
            $table->integer('umur')->nullable();
            $table->enum('jenis_kelamin', ['L', 'P']);
            $table->uuid('unit_id')->nullable();
            $table->uuid('position_id')->nullable();
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
