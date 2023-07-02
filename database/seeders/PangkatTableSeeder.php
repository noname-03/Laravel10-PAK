<?php

namespace Database\Seeders;

use App\Models\Pangkat;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PangkatTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pangkat::create([
            'title' => 'III A - PENATA MUDA',
        ]);
        Pangkat::create([
            'title' => 'III B - PENATA MUDA TINGKAT ',
        ]);
        Pangkat::create([
            'title' => 'III C - PENATA',
        ]);
        Pangkat::create([
            'title' => 'III D - PENATA TINGKAT 1',
        ]);
        Pangkat::create([
            'title' => 'IV A - PEMBINA',
        ]);
        Pangkat::create([
            'title' => 'IV B - PEMBINA TINGKAT 1',
        ]);
        Pangkat::create([
            'title' => 'IV C - PEMBINA UTAMA MUDA',
        ]);
        Pangkat::create([
            'title' => 'IV D - PEMBINA UTAMA MADYA',
        ]);
        Pangkat::create([
            'title' => 'IV E - PEMBINA UTAMA ',
        ]);
    }
}