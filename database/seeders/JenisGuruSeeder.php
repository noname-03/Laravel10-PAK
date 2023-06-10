<?php

namespace Database\Seeders;

use App\Models\jenisGuru;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JenisGuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        jenisGuru::create(['title' => 'Guru Mapel']);
        jenisGuru::create(['title' => 'Guru BK']);
        jenisGuru::create(['title' => 'Guru Piket']);
        jenisGuru::create(['title' => 'Guru Kesiswaan']);
        jenisGuru::create(['title' => 'Guru Pembimbing']);
        jenisGuru::create(['title' => 'Guru Wali Kelas']);
        jenisGuru::create(['title' => 'Guru Kepala Sekolah']);
        jenisGuru::create(['title' => 'Guru Kepala Perpustakaan']);
        jenisGuru::create(['title' => 'Guru Kepala Lab']);
    }
}