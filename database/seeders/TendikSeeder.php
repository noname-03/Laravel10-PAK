<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tendik;

class TendikSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tendik::create([
            'pangkat_id' => 1,
            'jabatan_id' => 1,
            'jenis_guru_id' => 1,
            'nip' => '1234567890',
            'nama' => 'Tendik',
            'jenis_kelamin' => 'L',
            'tugas_kota' => 'Kota',
            'tugas_sekolah' => 'Sekolah',
            'masa_tahun' => 1,
            'masa_bulan' => 1,
            'pendidikan_linear' => true,
        ]);
    }
}