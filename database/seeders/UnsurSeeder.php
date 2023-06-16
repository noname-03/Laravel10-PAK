<?php

namespace Database\Seeders;

use App\Models\Unsur;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UnsurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Unsur::create([
            'parent_id' => null,
            'nilai' => null,
            'title' => 'Unsur Utama',
            'year' => 2021,
        ]);
        Unsur::create([
            'parent_id' => 1,
            'nilai' => null,
            'title' => 'Pendidikan',
            'year' => 2021,
        ]);

        Unsur::create([
            'parent_id' => 2,
            'nilai' => null,
            'title' => 'Mengikuti pendidikan dan memperoleh gelar/ijazah/akta',
            'year' => 2021,
        ]);

        Unsur::create([
            'parent_id' => 3,
            'nilai' => null,
            'title' => 'Doktor',
            'year' => 2021,
        ]);

        Unsur::create([
            'parent_id' => 3,
            'nilai' => null,
            'title' => 'Magister',
            'year' => 2021,
        ]);

        Unsur::create([
            'parent_id' => 3,
            'nilai' => null,
            'title' => 'Diploma',
            'year' => 2021,
        ]);

        Unsur::create([
            'parent_id' => 2,
            'nilai' => null,
            'title' => 'Mengikuti pelatihan prajabatan',
            'year' => 2021,
        ]);

        Unsur::create([
            'parent_id' => 7,
            'nilai' => null,
            'title' => 'Pelatihan prajabatan fungsional bagi guru calon pegawai',
            'year' => 2021,
        ]);

        Unsur::create([
            'parent_id' => 1,
            'nilai' => null,
            'title' => 'PEMBELAJARAN/BIMBINGAN DAN TUGAS TERTENTU',
            'year' => 2021,
        ]);

        Unsur::create([
            'parent_id' => 9,
            'nilai' => null,
            'title' => 'Melaksanakan proses pembelajaran',
            'year' => 2021,
        ]);

        Unsur::create([
            'parent_id' => 10,
            'nilai' => null,
            'title' => 'Merencanakan dan melaksanakan pembelajaran,mengewaliasi dan menilai hasil pembelajaran,menganalisis hasil pembelajaran, melaksanakan tindaklanjut hasil penilaian',
            'year' => 2021,
        ]);

        Unsur::create([
            'parent_id' => 9,
            'nilai' => null,
            'title' => 'Melaksanakan proses bimbingan',
            'year' => 2021,
        ]);
        Unsur::create([
            'parent_id' => 12,
            'nilai' => null,
            'title' => 'Merencanakan dan melaksanakan pembimbingan,mengewaluasi dan menilai hasil bimbingan, menganalisis hasil bimbingan, melaksanakan tindak lanjut hasil pembimbingan',
            'year' => 2021,
        ]);
        Unsur::create([
            'parent_id' => 9,
            'nilai' => null,
            'title' => 'Melaksanakan tugas lain yang relevan dengan fungsi sekolah/madrasah',
            'year' => 2021,
        ]);
        Unsur::create([
            'parent_id' => 14,
            'nilai' => null,
            'title' => 'Menjadi Kepala Sekolah/Madrasah per tahun',
            'year' => 2021,
        ]);
        Unsur::create([
            'parent_id' => 14,
            'nilai' => null,
            'title' => 'Menjadi Wakil Kepala Sekolah/Madrasah per tahun',
            'year' => 2021,
        ]);
        Unsur::create([
            'parent_id' => 14,
            'nilai' => null,
            'title' => 'Menjadi ketua program keahlian/program studi atau yang sejenisnya',
            'year' => 2021,
        ]);
        Unsur::create([
            'parent_id' => 14,
            'nilai' => null,
            'title' => 'Menjadi kepala perpustakaan',
            'year' => 2021,
        ]);
        Unsur::create([
            'parent_id' => 14,
            'nilai' => null,
            'title' => 'Menjadi kepala laboratorium, bengkel, unit produksi atau yang sejenisnya',
            'year' => 2021,
        ]);
        Unsur::create([
            'parent_id' => null,
            'nilai' => null,
            'title' => 'Unsur Penunjang',
            'year' => 2021,
        ]);
        Unsur::create([
            'parent_id' => 20,
            'nilai' => null,
            'title' => 'PENUNJANG TUGAS GURU',
            'year' => 2021,
        ]);
        Unsur::create([
            'parent_id' => 21,
            'nilai' => null,
            'title' => 'Memperoleh gelar/ijazah yang tidak sesuai dengan bidang yang diampunya.',
            'year' => 2021,
        ]);
        Unsur::create([
            'parent_id' => 22,
            'nilai' => null,
            'title' => 'Doktor.',
            'year' => 2021,
        ]);
        Unsur::create([
            'parent_id' => 22,
            'nilai' => null,
            'title' => 'Pascasarjana.',
            'year' => 2021,
        ]);
        Unsur::create([
            'parent_id' => 22,
            'nilai' => null,
            'title' => 'Sarjana.',
            'year' => 2021,
        ]);
        Unsur::create([
            'parent_id' => 21,
            'nilai' => null,
            'title' => 'Melaksanakan kegiatan yang mendukung tugas guru.',
            'year' => 2021,
        ]);
        Unsur::create([
            'parent_id' => 26,
            'nilai' => null,
            'title' => 'Membimbing siswa dalam praktik kerja nyata/praktik industri/ekstrakurikuler dan yang sejenisnya',
            'year' => 2021,
        ]);
        Unsur::create([
            'parent_id' => 26,
            'nilai' => null,
            'title' => 'Sebagai pengawas ujian penilaian dan evaluasi terhadap proses dan hasil belajar tingkat: Sekolah',
            'year' => 2021,
        ]);
        Unsur::create([
            'parent_id' => 26,
            'nilai' => null,
            'title' => 'Sebagai pengawas ujian penilaian dan evaluasi terhadap proses dan hasil belajar tingkat: Nasional',
            'year' => 2021,
        ]);
        Unsur::create([
            'parent_id' => 26,
            'nilai' => null,
            'title' => 'MemMenjadi anggota organisasi profesi, sebagai: Pengurus Aktif',
            'year' => 2021,
        ]);
        Unsur::create([
            'parent_id' => 26,
            'nilai' => null,
            'title' => 'MemMenjadi anggota organisasi profesi, sebagai: Anggota aktif PGRI',
            'year' => 2021,
        ]);
        Unsur::create([
            'parent_id' => 26,
            'nilai' => null,
            'title' => 'Menjadi anggota kegiatan kepramukaan sebagai: Pengurus Aktif',
            'year' => 2021,
        ]);
        Unsur::create([
            'parent_id' => 26,
            'nilai' => null,
            'title' => 'Menjadi anggota organisasi profesi, sebagai: Anggota Aktif',
            'year' => 2021,
        ]);
    }
}