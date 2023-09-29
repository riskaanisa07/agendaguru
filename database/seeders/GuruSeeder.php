<?php

namespace Database\Seeders;

use App\Models\Guru;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Guru::create([
            'mapel_id' => 1,
            'kelas_id' => 1,
        ]);

        Guru::create([
            'mapel_id' => 2,
            'kelas_id' => 2,
        ]);
    }
}
