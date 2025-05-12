@extends('pattern.header')

@section('titulo', 'Bairro Melhor - Login')

@section('conteudo')
<nav class="bg-sky-950 text-white">
    <div class="container mx-auto px-4 py-3 flex justify-between items-center">
        <!-- Links da Navbar -->
        <div class="flex gap-8">
            <a href="#Inicio" class="hover:text-sky-400 transition duration-300">Início</a>
            <a href="#Bairro" class="hover:text-sky-400 transition duration-300">Bairro</a>
        </div>

        <!-- Botões de Ação -->
        <div class="flex gap-4">
            <a href="{{route('inicio')}}" class="bg-sky-500 hover:bg-sky-600 text-white rounded-md px-4 py-2 transition-transform duration-300 transform hover:scale-105">Voltar</a>
            <a href="{{route('cadastrar')}}" class="bg-sky-500 hover:bg-sky-600 text-white rounded-md px-4 py-2 transition-transform duration-300 transform hover:scale-105">Cadastrar</a>
        </div>
    </div>
</nav>

<div class="min-h-screen flex flex-col md:flex-row items-center justify-center">
    <!-- Seção da Imagem ao lado do formulário -->
    <div class="hidden md:flex flex-1 justify-center items-center p-4">
        <img class="shadow-md rounded-full h-max w-max   p-2" src="{{asset('img/bairro-melhor-logo.png')}}" alt="logo-Bairro-Melhor">
    </div>

    <!-- Formulário de Login ao lado da imagem -->
    <div class="bg-slate-100 text-justify p-6 m-4 shadow-x1 rounded-lg   flex-1 ">
        <div class="mb-6">
            <h1 class="font-semibold text-3xl tracking-wide text-center text-sky-700">Entrar no Bairro Melhor</h1>
        </div>

        <form action="{{route('Login')}}" method="post" class="max-w-lg mx-auto p-6 bg-white rounded-lg shadow-lg space-y-4">
            @csrf
            <div>
                <label for="email" class="block text-xl font-semibold text-gray-700">Email:</label>
                <input type="email" name="email" id="email" required class="mt-1 block w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
            </div>

            <div>
                <label for="password" class="block text-xl font-semibold text-gray-700">Senha:</label>
                <input type="password" name="password" id="password" required class="mt-1 block w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
            </div>

            <!-- Exibe mensagens de erro -->
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="text-red-600">
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <div class="flex justify-center">
                <button type="submit" class="w-full bg-blue-500 text-white py-3 rounded-lg text-lg hover:bg-blue-600 transition duration-300">Entrar</button>
            </div>
            <br>
            <a href="">Esqueci a senha !</a>
        </form>
        <br>

    </div>
</div>