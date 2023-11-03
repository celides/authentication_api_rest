<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use App\Models\Enlace;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EnlaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('enlaces')->insert([
            ['titulo' => 'Enlace 1', 'url' => 'https://enlace1.com'],
            ['titulo' => 'Enlace 2', 'url' => 'https://enlace2.com'],
            ['titulo' => 'Enlace 3', 'url' => 'https://enlace3.com'],
            ['titulo' => 'Enlace 4', 'url' => 'https://enlace4.com'],
        ]);
    }
}
