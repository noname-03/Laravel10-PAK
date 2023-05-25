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
            'title' => 'Jabatan 1',
        ]);
        Jabatan::create([
            'title' => 'Jabatan 2',
        ]);
        Jabatan::create([
            'title' => 'Jabatan 3',
        ]);
        Jabatan::create([
            'title' => 'Jabatan 4',
        ]);
    }
}