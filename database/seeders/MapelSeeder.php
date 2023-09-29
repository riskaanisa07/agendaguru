<?php

namespace Database\Seeders;

use App\Models\Mapel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MapelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Mapel::create([
            'nama_mapel' => 'PKK',
        ]);

        Mapel::create([
            'nama_mapel' => 'Basis Data',
        ]);

        Mapel::create([
            'nama_mapel' => 'PPL',
        ]);

        Mapel::create([
            'nama_mapel' => 'PWPB',
        ]);

        Mapel::create([
            'nama_mapel' => 'PBO',
        ]);

        Mapel::create([
            'nama_mapel' => 'Dasar Dasar Pemrograman',
        ]);
    }
}
