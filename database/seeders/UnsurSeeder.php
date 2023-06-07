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
            'title' => 'Pendidikan',
            'year' => 2021,
        ]);

        Unsur::create([
            'parent_id' => 1,
            'nilai' => null,
            'title' => 'Mengikuti pendidikan dan memperoleh gelar/ijazah/akta',
            'year' => 2021,
        ]);

        Unsur::create([
            'parent_id' => 2,
            'nilai' => null,
            'title' => 'Doktor',
            'year' => 2021,
        ]);

        Unsur::create([
            'parent_id' => 2,
            'nilai' => null,
            'title' => 'Magister',
            'year' => 2021,
        ]);

        Unsur::create([
            'parent_id' => 2,
            'nilai' => null,
            'title' => 'Diploma',
            'year' => 2021,
        ]);

        Unsur::create([
            'parent_id' => 1,
            'nilai' => null,
            'title' => 'Mengikuti pelatihan prajabatan',
            'year' => 2021,
        ]);

        Unsur::create([
            'parent_id' => 6,
            'nilai' => null,
            'title' => 'Pelatihan prajabatan fungsional bagi guru calon pegawai',
            'year' => 2021,
        ]);

        Unsur::create([
            'parent_id' => null,
            'nilai' => null,
            'title' => 'PEMBELAJARAN/BIMBINGAN DAN TUGAS TERTENTU',
            'year' => 2021,
        ]);

        Unsur::create([
            'parent_id' => 8,
            'nilai' => null,
            'title' => 'Melaksanakan proses pembelajaran',
            'year' => 2021,
        ]);

        Unsur::create([
            'parent_id' => 9,
            'nilai' => null,
            'title' => 'Merencanakan dan melaksanakan pembelajaran,mengewaliasi dan menilai hasil pembelajaran,menganalisis hasil pembelajaran, melaksanakan tindaklanjut hasil penilaian',
            'year' => 2021,
        ]);

        Unsur::create([
            'parent_id' => 8,
            'nilai' => null,
            'title' => 'Melaksanakan proses bimbingan',
            'year' => 2021,
        ]);
    }
}