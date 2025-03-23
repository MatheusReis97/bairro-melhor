<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BairroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('bairros')->insert([
            ['bairro' => 'Vila Nova', 'cidade_id' => 5],
            ['bairro' => 'Jardim Costa e Silva', 'cidade_id' => 5],
            ['bairro' => 'Vila Paulista', 'cidade_id' => 5],
            ['bairro' => 'Centro', 'cidade_id' => 5],
            ['bairro' => 'Jardim Casqueiro', 'cidade_id' => 5],
            ['bairro' => 'Vila Caraguatá', 'cidade_id' => 5],
        ]);
    }
}
