<?php

namespace Tests\Feature\servicos;

use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AdressTest extends TestCase
{
    use DatabaseTransactions;

    public function test_criacao_de_endereco()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
