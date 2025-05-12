<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin',
                'email' => 'Admin1@admin',
                'password' => Hash::make('admin1'),
                'telefone' => '(13) 98765-4321',
                'Nascimento' => '1990-01-15',
                'imagem_url' => 'https://f.i.uol.com.br/fotografia/2018/01/18/15163126835a61186beddfd_1516312683_3x2_md.jpg',
                'endereco_id' => 1, 
                'classificacao_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
