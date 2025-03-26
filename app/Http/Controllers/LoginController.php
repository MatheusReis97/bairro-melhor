<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function login(Request $request)
{
    
    // Validação dos dados de login
    $credentials = $request->validate([
        'email' => 'required|email',
        'password' => 'required|string|min:6',
    ]);

    // Tenta autenticar o usuário no banco de dados
    if (Auth::attempt($credentials)) {
        // Se o login foi bem-sucedido, regenera a sessão por segurança
        $request->session()->regenerate();
        
        // Redireciona para uma página protegida
        return redirect()->intended('/home');
    }

    // Se as credenciais forem inválidas, retorna com uma mensagem de erro
    return back()->withErrors([
        'email' => 'As credenciais fornecidas não são válidas.',
    ]);
}


public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }

public function AreaDeAcesso(){
    return view ('login');
}
}
