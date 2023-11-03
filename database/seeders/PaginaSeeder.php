<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use App\Models\Pagina;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaginaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('paginas')->insert([
            ['nombre' => 'Página de Inicio', 'url' => '/'],
            ['nombre' => 'Acerca de Nosotros', 'url' => '/acerca'],
            ['nombre' => 'Contacto', 'url' => '/contacto'],
            ['nombre' => 'Servicios', 'url' => '/servicios'],
        ]);
    }
}
