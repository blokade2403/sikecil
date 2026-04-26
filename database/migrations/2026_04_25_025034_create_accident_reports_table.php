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
        Schema::create('accident_reports', function (Blueprint $table) {
            $table->uuid('id')->primary();

            $table->char('unit_id', 36)->nullable();
            $table->char('user_id', 36)->nullable();

            // INFORMASI KEJADIAN
            $table->string('tempat');
            $table->date('tanggal');
            $table->time('jam');
            $table->text('saksi')->nullable();

            // DATA KORBAN
            $table->integer('jumlah_korban')->default(0);
            $table->integer('laki_laki')->default(0);
            $table->integer('perempuan')->default(0);
            $table->string('nama_korban')->nullable();
            $table->integer('umur')->nullable();
            $table->string('cedera')->nullable();
            $table->string('tingkat_cedera')->nullable(); // ringan / berat / meninggal
            $table->string('foto')->nullable();

            // KRONOLOGI
            $table->text('uraian');

            // SUMBER & TIPE
            $table->string('sumber_kecelakaan')->nullable();
            $table->enum('tipe', ['accident', 'incident', 'near_miss']);

            // TINDAK LANJUT
            $table->text('tindak_lanjut')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accident_reports');
    }
};
