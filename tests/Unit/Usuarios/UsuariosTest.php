<?php

namespace Tests\Unit\Usuarios;

use App\Models\Servico;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class UsuariosTest extends TestCase
{
   
    public function test_criacao_de_usuario()
    {
       $usuario = User::factory()->create();

       $this->assertDatabaseHas('users', [
        'id' => $usuario->id,
        'email' => $usuario->email, // ou qualquer outro campo único que identifique o usuário
    ]);

    }



    public function test_editando_usuario()
    {
       $usuario = User::factory()->create();

       $usuario->update([
        'name' => 'Silvio Luiz'
       ]);

       $this->assertEquals('Silvio Luiz', $usuario->name);
    }

    public function test_exclusao_de_usuario()
    {
        $usuario = User::factory()->create([
            'name' => 'Mario Balotelli'
        ]);
        
        $usuario->delete();

        $this->assertDatabaseMissing('users', [
            'name' => 'Mario Balotelli'
        ]);
    }


    public function test_criptografia_da_senha_do_usuario(){

        $senha = 'testesenha';

        $usuario = User::factory()->create([
            'password' => Hash::make($senha)
        ]);
        
        
        $this->assertTrue(Hash::check($senha, $usuario->password));
    }


    public function test_relacao_usuario_servico(){

        $usuario = User::factory()->create();
        $servico = Servico::factory()->create([
            'users_id' => $usuario->id 
        ]);

        $this->assertDatabaseHas('users', [
            'id'=>$usuario->id,
        ]);
        
        $this->assertDatabaseHas('servicos',[
            'users_id'=>$usuario->id,
        ]);
    
        $this->assertEquals($usuario->id, $servico->users_id);
    }
}
