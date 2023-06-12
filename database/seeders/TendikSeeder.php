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
            'tugas_mengajar' => 'Sekolah',
            'masa_tahun' => 1,
            'masa_bulan' => 1,
            'pangkat_tanggal' => '2021-01-01',
            'pendidikan_strata' => 'S1',
            'pendidikan_jurusan' => 'Jurusan',
            'pendidikan_linear' => true,
            'lahir_tempat' => 'Tempat',
            'lahir_tanggal' => '2021-01-01',
            'jabatan_tanggal' => '2021-01-01',
        ]);
        Tendik::create([
            'pangkat_id' => 1,
            'jabatan_id' => 1,
            'jenis_guru_id' => 1,
            'nip' => '1234567890',
            'nama' => 'Tendik',
            'jenis_kelamin' => 'L',
            'tugas_kota' => 'Kota',
            'tugas_sekolah' => 'Sekolah',
            'tugas_mengajar' => 'Sekolah',
            'masa_tahun' => 1,
            'masa_bulan' => 1,
            'pangkat_tanggal' => '2021-01-01',
            'pendidikan_strata' => 'S1',
            'pendidikan_jurusan' => 'Jurusan',
            'pendidikan_linear' => true,
            'lahir_tempat' => 'Tempat',
            'lahir_tanggal' => '2021-01-01',
            'jabatan_tanggal' => '2021-01-01',
        ]);
    }
}