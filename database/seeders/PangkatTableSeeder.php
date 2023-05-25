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
            'title' => 'Pangkat 1',
        ]);
        Pangkat::create([
            'title' => 'Pangkat 2',
        ]);
        Pangkat::create([
            'title' => 'Pangkat 3',
        ]);
        Pangkat::create([
            'title' => 'Pangkat 4',
        ]);
    }
}