<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClassificacoesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('classificacoes')->insert(
            [
            [
            'tipo' => 'Usuário',
                'descricao' => 'Usuário comum do sistema.',
            ],
            [
                'tipo' => 'Representante',
                'descricao' => 'Representante do bairro eleitos pelos moradores .',
            ],
            [
                'tipo' => 'Terceiro',
                'descricao' => 'Terceiro envolvido nos processos políticos, como vereadores e representantes.',
            ],
        ]);
    }
}
