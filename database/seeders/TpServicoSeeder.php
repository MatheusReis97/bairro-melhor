<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TpServicoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tp_servicos')->insert([
            [
                'Tipo_Servico' => 'Limpeza',
                'descricao' => 'Serviços de limpeza residencial e comercial.',
            ],
            [
                'Tipo_Servico' => 'Manutenção',
                'descricao' => 'Serviços de manutenção elétrica e hidráulica.',
            ],
            [
                'Tipo_Servico' => 'Construção',
                'descricao' => 'Serviços de construção e reforma.',
            ],
            [
                'Tipo_Servico' => 'Pintura',
                'descricao' => 'Serviços de pintura interna e externa.',
            ],
            [
                'Tipo_Servico' => 'Jardinagem',
                'descricao' => 'Serviços de cuidados com jardins e paisagismo.',
            ],
            [
                'Tipo_Servico' => 'Saúde',
                'descricao' => 'Serviços que envolver caso de saúde e em estabeleciemento de saúde.',
            ],
            [
                'Tipo_Servico' => 'Segurança',
                'descricao' => 'Serviços de segurança privada e monitoramento.',
            ],
            [
                'Tipo_Servico' => 'Transporte',
                'descricao' => 'Serviços de transporte local.',
            ],
        ]);
    }
}
