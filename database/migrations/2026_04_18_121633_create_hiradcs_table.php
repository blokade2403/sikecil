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
        Schema::create('hiradcs', function (Blueprint $table) {
            $table->uuid('id')->primary();

            $table->char('unit_id', 36);
            $table->string('aktivitas');
            $table->text('bahaya');
            $table->text('pengendalian');

            $table->integer('kemungkinan'); // likelihood
            $table->integer('keparahan');   // severity
            $table->integer('score');       // kemungkinan x keparahan
            $table->string('peringkat');    // low, medium, high
            $table->char('approved_by', 36)->nullable();
            $table->timestamp('approved_at')->nullable();
            $table->enum('status', [
                'draft',
                'submitted',
                'approved_supervisor',
                'approved_k3',
                'rejected'
            ])->default('draft');

            $table->char('approved_supervisor_by', 36)->nullable();
            $table->char('approved_k3_by', 36)->nullable();

            $table->timestamps();

            $table->foreign('unit_id')->references('id')->on('units')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hiradcs');
    }
};
