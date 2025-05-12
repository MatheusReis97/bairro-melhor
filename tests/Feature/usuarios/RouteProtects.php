<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RouteProtects extends TestCase

{
    use DatabaseTransactions;

    public function test_pagina_inicial_pode_ser_acessada()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_verificar_route_protegida()
    {
        $response = $this->get('/perfil');
        
        $response->assertStatus(302); // Verifica o redirecionamento
        $response->assertRedirect(route('login')); // Garante que redireciona para a página de login
    }

    public function test_usuario_autenticado_pode_acessar()
    {
      
    
        $user = User::factory()->create();
        $response = $this->actingAs($user)->get('/home');
        $response->assertStatus(200);

        
  
    }
}
