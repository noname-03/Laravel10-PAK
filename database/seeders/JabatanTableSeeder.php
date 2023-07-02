<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Jabatan;

class JabatanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Jabatan::create([
            'title' => 'GURU PERTAMA',
        ]);
        Jabatan::create([
            'title' => 'GURU MUDA',
        ]);
        Jabatan::create([
            'title' => 'GURU MADYA',
        ]);
        Jabatan::create([
            'title' => 'GURU UTAMA',
        ]);
    }
}