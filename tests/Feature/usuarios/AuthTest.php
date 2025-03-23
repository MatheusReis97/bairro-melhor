<?php

namespace Tests\Feature\usuarios;

use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AuthTest extends TestCase
{
    use DatabaseTransactions;
#  vendor/bin/phpunit tests/Feature/AuthTest.php

    public function test_login_de_usuario_com_credentials()
    {
        $user =User::factory()->create([
            'email'=> 'teste@bairo-melhor.com',
            'password' => 'senha123',
            'telefone' => 2132132222,
            'Nascimento'=> '1996/11/19'
        ]);


        $response = $this->post('/login', [
            'email'=> 'teste@bairo-melhor.com',
            'password' => 'senha123' 
        ]);

        
        // Espera que o redirecionamento vá para a página inicial (ou outra que você defina)
        $response->assertRedirect('/home');
        $this->assertAuthenticatedAs($user);
    }
}
