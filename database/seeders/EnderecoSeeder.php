<?php

namespace Database\Seeders;

use Doctrine\Inflector\Rules\Word;
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

        $ceps = [
            ['cep' => '11535000', 'logradouro' => 'Rua Nicolau Cuqui'],
            ['cep' => '11535005', 'logradouro' => 'Rua Gutenberg Alvarenga'],
            ['cep' => '11535010', 'logradouro' => 'Rua José de Pinho'],
            ['cep' => '11535015', 'logradouro' => 'Rua Dez de Fevereiro'],
            ['cep' => '11535020', 'logradouro' => 'Rua João Maria Catarino'],
            ['cep' => '11535022', 'logradouro' => 'Rua João Maria Catarino'],
            ['cep' => '11535025', 'logradouro' => 'Rua Iracema de Oliveira Cajé'],
            ['cep' => '11535030', 'logradouro' => 'Rua Piaçaguera'],
            ['cep' => '11535040', 'logradouro' => 'Rua Francisco da Costa'],
            ['cep' => '11535050', 'logradouro' => 'Rua Michajlo Halajko'],
            ['cep' => '11535055', 'logradouro' => 'Rua José Alves'],
            ['cep' => '11535060', 'logradouro' => 'Rua Pedro de Souza'],
            ['cep' => '11535070', 'logradouro' => 'Rua Dr. João de Souza'],
            ['cep' => '11535080', 'logradouro' => 'Rua Santos Dumont']
        ];

        $complementos = [
            'Casa 12',
            'Apt 101',
            'Bloco B',
            'Andar Térreo',
            'Sala 2',
            'Casa 6',
            'Próximo ao ponto de ônibus',
            'Apartamento 305',
            'Lote 3',
            'Cobertura',
            'Galpão 1',
            'Piso Superior',
            'Escritório 04',
            'Fundos',
            'Casa ao lado da farmácia'
        ];


        $sorteioCEP =  $ceps[array_rand($ceps)];
        $sorteioComplemento = $complementos[array_rand($complementos)];

        DB::table('enderecos')->insert([
            [
                'Rua' =>  $sorteioCEP['logradouro'],
                'CEP' => $sorteioCEP['cep'],
                'Num_Casa' => rand(1,200),
                'Complemento' => $sorteioComplemento,
                'uf_id' => 1,
                'cidade_id' => 5,
                'bairro_id' => 6,
            ],
           
            ]);
    }
}
