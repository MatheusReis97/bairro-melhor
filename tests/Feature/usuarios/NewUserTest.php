<?php

namespace Tests\Feature\usuarios;

use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Testing\Fakes\MailFake;
use Tests\TestCase;

class NewUserTest extends TestCase
{

    use DatabaseTransactions;
    /**
     * A basic feature test example.
     */
    public function test_criacao_novo_usuario()
    {
        $senha = fake()->password(10);

        $usuario = new User([
            'name' => fake()->name,
            'email'=> fake()->unique()->safeEmail,
            'password'=>Hash::make($senha),
            'telefone'=>fake()->phoneNumber(9),
            'Nascimento'=>fake()->date(),
        ]);

        $usuario->save();


        // verificando se está salvando corretamente no banco de dados;
        $this->assertDatabaseHas('users',[
            'email'=>$usuario->email,
            'telefone' => $usuario->telefone,
        ]);


        // verificar se a senha está sendo crachada 
        $this->assertTrue(Hash::check($senha, $usuario->password));

    }
}
