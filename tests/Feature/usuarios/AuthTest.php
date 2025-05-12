<?php

namespace Tests\Feature\usuarios;

use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class AuthTest extends TestCase
{
    use DatabaseTransactions;
#  vendor/bin/phpunit tests/Feature/AuthTest.php

    public function test_login_de_usuario_com_credentials()
    {

        $senha = 'TudoBom';

        $user =User::factory()->create([
                'password' => Hash::make($senha),
        ]);
           
        $user->save();

        $response = $this->post('/login', [
            'email'=> $user->email,
            'password' => $senha
        ]);

        // $response->assertStatus(302);
        // Espera que o redirecionamento vá para a página inicial (ou outra que você defina)
        $response->assertRedirect('/home');

        $this->assertAuthenticatedAs($user);

    }

    public function test_login_de_usuario_sem_credentials()
    {

     

        $user =User::factory()->create([
                'password' => Hash::make('senhaOk'),
        ]);
           
        $user->save();

        $response = $this->post('/login', [
            'email'=> $user->email,
            'password' => 'senha_incorreta'
        ]);

        
        $response->assertSessionHasErrors(['email']); // Verifica se há erro na sessão

    $this->assertGuest(); // Garante que ninguém foi autenticado

    }
}
