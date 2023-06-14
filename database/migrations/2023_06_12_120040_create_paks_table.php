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
        Schema::create('pak', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('jenis_guru_id')->constrained('jenis_guru');
            $table->string('tugas_kota');
            $table->string('tugas_sekolah');
            $table->string('tugas_mengajar');
            $table->string('dok_pak_terakhir');
            $table->string('dok_pak_penyesuaian');
            $table->string('dok_pangkat_terakhir');
            $table->string('dok_ijazah_terakhir');
            $table->enum('status', ['sukses', 'gagal', 'menunggu', 'revisi']);
            $table->string('pak_no')->nullable();
            $table->date('pak_awal')->nullable();
            $table->date('pak_akhir')->nullable();
            $table->year('pak_priode');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pak');
    }
};