<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class CadastroController extends Controller
{
    public function cadastrar(Request $request){

        $validated = $request ->validate([
            'nome' => 'required|string|max:255',
            'email' =>'required|email',
            'password' => 'required',
            'telefone' =>'max:16'
        ]);

        $classificacao = 1;

    $usuario = User::FirstOrCreate(
        ['email' => $validated['email']],
        [ // Dados para criação se o usuário não for encontrado
            'name' => $validated['nome'],
            'password' => $validated['password'],
            'telefone' => $validated['telefone'],
            'Nascimento' => $request['data-nascimento'],
            'classificacao_id' => $classificacao,
        ]
    );

    if($usuario){
        return redirect()->back()->with('success', 'Usuário cadastrado com sucesso!');
    };    
    }

    
}
