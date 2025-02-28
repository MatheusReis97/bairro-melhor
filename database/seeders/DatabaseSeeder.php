<?php

namespace Database\Seeders;

use App\Models\TpServico;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       $this->call([
        UfSeeder::class,
        CidadeSeeder::class,
        BairroSeeder::class,
        ClassificacoesSeeder::class,
        EnderecoSeeder::class,
        TpServicoSeeder::class,
        UserAdminSeeder::class,
       ]);
    }
}
