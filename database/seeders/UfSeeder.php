<?php

namespace Database\Seeders;

use App\Models\Uf;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UfSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ufs')->insert([
            ['id' => 1, 'nome' => 'São Paulo', 'sigla' => 'SP'],
            ['id' => 2, 'nome' => 'Rio de Janeiro', 'sigla' => 'RJ'],
            ['id' => 3, 'nome' => 'Minas Gerais', 'sigla' => 'MG'],
            ['id' => 4, 'nome' => 'Paraná', 'sigla' => 'PR'],
            ['id' => 5, 'nome' => 'Bahia', 'sigla' => 'BA'],
        ]);
    }
}
