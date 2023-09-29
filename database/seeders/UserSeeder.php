<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin 1',
            'email' => 'admin1@gmail.com',
            'password' => bcrypt('123456'),
            'role' => 'admin',
        ]);

        User::create([
            'name' => 'Guru 1',
            'email' => 'guru1@gmail.com',
            'password' => bcrypt('123456'),
            'role' => 'guru',
            'guru_id' => 1,
        ]);

        User::create([
            'name' => 'Guru 2',
            'email' => 'guru2@gmail.com',
            'password' => bcrypt('123456'),
            'role' => 'guru',
            'guru_id' => 2,
        ]);
    }
}
