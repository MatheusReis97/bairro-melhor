<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CidadeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cidades')->insert([
            ['cidade' => 'Santos', 'uf_id' => 1],
            ['cidade' => 'São Vicente', 'uf_id' => 1],
            ['cidade' => 'Guarujá', 'uf_id' => 1],
            ['cidade' => 'Praia Grande', 'uf_id' => 1],
            ['cidade' => 'Cubatão', 'uf_id' => 1],
        ]);
    }
}
