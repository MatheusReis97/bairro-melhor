<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EnderecoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('enderecos')->insert([
            [
                'Rua' => 'Avenida Principal',
                'CEP' => 12342111,
                'Num_Casa' => 202,
                'Complemento' => 'Casa com piscina',
                'uf_id' => 1,
                'cidade_id' => 5,
                'bairro_id' => 6,
            ],
            [
                'Rua' => 'Rua das Flores',
                'CEP' => 12342123,
                'Num_Casa' => 505,
                'Complemento' => 'Casa verde',
                'uf_id' => 1,
                'cidade_id' => 5,
                'bairro_id' => 6,
            ],
            ]);
    }
}
