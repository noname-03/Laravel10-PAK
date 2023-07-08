<?php

namespace Database\Seeders;

use App\Models\PendidikanStrata;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PendidikanStrataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PendidikanStrata::create([
            'title' => 'SMA/Sederajat',
        ]);
        PendidikanStrata::create([
            'title' => 'Diploma',
        ]);
        PendidikanStrata::create([
            'title' => 'Sarjana',
        ]);
        PendidikanStrata::create([
            'title' => 'Magister',
        ]);
        PendidikanStrata::create([
            'title' => 'Doktor',
        ]);
    }
}