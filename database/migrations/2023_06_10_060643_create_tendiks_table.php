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
        Schema::create('tendik', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pangkat_id')->constrained('pangkat');
            $table->foreignId('jabatan_id')->constrained('jabatan');
            $table->foreignId('jenis_guru_id')->constrained('jenis_guru');
            $table->string('nip')->unique();
            $table->string('nama');
            $table->enum('jenis_kelamin', ['L', 'P']);
            $table->string('tugas_kota');
            $table->string('tugas_sekolah');
            $table->string('tugas_mengajar');
            $table->year('masa_tahun');
            $table->integer('masa_bulan');
            $table->date('pangkat_tanggal');
            $table->boolean('pendidikan_linear');
            $table->string('pendidikan_strata');
            $table->string('pendidikan_jurusan');
            $table->string('lahir_tempat');
            $table->date('lahir_tanggal');
            $table->date('jabatan_tanggal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tendik');
    }
};