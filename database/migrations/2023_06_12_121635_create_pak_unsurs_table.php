<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pak_unsur', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pak_id')->constrained('pak')->onDelete('cascade');
            $table->foreignId('unsur_id')->constrained('unsur');
            $table->double('nilai');
            $table->string('dokumen')->nullable();
            $table->boolean('is_verified')->default(false);
            $table->string('title')->nullable();
            $table->year('tahun')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pak_unsur');
    }
};