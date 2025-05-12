<?php

namespace Tests\Unit;

use App\Models\Servico;
use App\Models\TpServico;
use Tests\TestCase;

use function Laravel\Prompts\text;

class ServicosTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_para_criacao_de_servico()
    {
        $NovoServico = Servico::factory()->create();

         $this->assertDatabaseHas('servicos', [
        'id' => $NovoServico->id,
        'Descricao_servico' => $NovoServico->Descricao_servico, // ou qualquer outro campo único que identifique o usuário
    ]);
    }

    public function test_editando_campo_do_servico()
    {
        $NovoServico = Servico::factory()->create();

        $NovoServico->update([
            'Status' => 'Concluido'
        ]);

        $this->assertEquals('Concluido',$NovoServico->Status);
    }

    public function test_excluindo_servico(){
        $NovoServico = Servico::factory()->create([
            'Status' => 'Desconhecido'
        ]);

        $NovoServico->delete();

        $this->assertDatabaseMissing('servicos', [
            'Status' => 'Desconhecido'
        ]);
    }

    public function test_de_relacao_servico_com_tpServico(){
        $NovoTpServico = TpServico::create([
            'Tipo_Servico' => 'VerificacaoTeste',
            'descricao' => fake()->text(100)
        ]);

        $NovoServico = Servico::factory()->create([
            'tp_servico_id' => '9'
        ]);

        $this->assertDatabaseHas('servicos', [
            'id'=>$NovoServico->id,
        ]);
        $this->assertDatabaseHas('tp_servicos',[
            'id'=>$NovoServico->tp_servico_id,
        ]);

    }
}
