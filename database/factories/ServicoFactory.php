<?php

namespace Database\Factories;

use BcMath\Number;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Servico>
 */
class ServicoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Descricao_servico' => fake()->text(200),
             'data_criacao' => now(),
             'data_conclusao' => Carbon::now()->addDays(30),
             'endereco_id' => 1,
             'tp_servico_id'=>fake()->numberBetween(1,8) ,
             'users_id' => $usuario->id ?? 1,
        ];
    }
}
