@extends('pattern.header')

@section('titulo', 'Bairro Melhor - Perfil')

@section('conteudo')


@section('content')

<nav class="bg-sky-950 text-white">
    <div class="container mx-auto px-4 py-3 flex justify-between items-center">

        <div class="flex gap-8">
            <img class="shadow-md rounded-full box-border h-14 w-14 p-2" src="{{asset('img/bairro-melhor-logo.png')}}" alt="logo-Bairro-Melhor">
        </div>

        <div class="flex gap-4 mt-2">
            <a href="{{route ('perfil')}}"><button class="bg-sky-500 hover:bg-sky-600 text-white rounded-md px-4 py-2 transition-transform duration-300 transform hover:scale-105">Perfil</button></a>
            <a href="{{route('home')}}"> <button class="bg-sky-500 hover:bg-sky-600 text-white rounded-md px-4 py-2 transition-transform duration-300 transform hover:scale-105">Dashboard</button></a>
            <form action="{{route('logout')}}" method="post">
                @csrf
                <button href="{{route('logout')}}" class="bg-sky-500 hover:bg-sky-600 text-white rounded-md px-4 py-2 transition-transform duration-300 transform hover:scale-105">Sair</button>
        </div>
    </div>
</nav>

<div class="bg-slate-100 text-justify p-7 m-6 shadow-xl rounded-lg  mx-auto">
    <div class="mb-6">
        <h1 class="font-semibold text-3xl tracking-wide text-center text-sky-600"> Perfil do Usuário</h1>
    </div>

    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    <!-- Exibindo informações básicas do usuário -->
    <div class="gap-8">
        <div class="grid grid-cols-2 gap-5 p-4">
            <div>
                <img src="{{ $usuario->imagem_url }}" alt="imagem Perfil" class=" shadow-md rounded-full box-border p-2 h-40 w-40">
            </div>
      
            <div class="block text-lg text-cyan-900 w-full bg-gray-100 rounded-md p-3 font-black">
                <h1>{{ $usuario->name }}</h1>
                <p class="block text-lg font-medium text-cyan-500 p-2">{{ $usuario->Classificacao->tipo ?? '-'}}</p>
            </div>
        </div>

        <div class="bg-white p-6 rounded-lg shadow-lg max-w-7xl mx-auto">
            <div class="grid grid-cols-3 gap-4">
                <div>
                    <p class="block text-lg font-semibold text-cyan-900">Email:</p>
                    <p class="w-full bg-gray-100 rounded-md p-3"> {{ $usuario->email }}</p>
                </div>

                <div>
                    <p class="block text-lg font-semibold text-cyan-900">Data Nascimento:</p>
                    <p class="w-full bg-gray-100 rounded-md p-3"> {{ \Carbon\Carbon::parse( $usuario->Nascimento)->format('d/m/Y') }}</p>
                </div>

                <div>
                    <p class="block text-lg font-semibold text-cyan-900">Telefone:</p>
                    <p class="w-full bg-gray-100 rounded-md p-3"> {{ $usuario->telefone }}</p>
                </div>

                <div>
                    <p class="block text-lg font-semibold text-cyan-900">Rua: </p>
                    <p class="w-full bg-gray-100 rounded-md p-3">{{ $usuario->endereco->Rua ?? '-' }}</p>
                </div>
                <div>
                    <p class="block text-lg font-semibold text-cyan-900">Numero:</p>
                    <p class="w-full bg-gray-100 rounded-md p-3">{{ $usuario->endereco->Num_Casa ?? '-' }}</p>
                </div>
                <div>
                    <p class="block text-lg font-semibold text-cyan-900">Complemento:</p>
                    <p class="w-full bg-gray-100 rounded-md p-3"> {{ $usuario->endereco->Complemento ?? '-'}}</p>
                </div>
                <div>
                    <p class="block text-lg font-semibold text-cyan-900">Cidade: </p>
                    <p class="w-full bg-gray-100 rounded-md p-3">{{ $usuario->endereco->cidade->cidade ?? '-'}}</p>
                </div>
                <div>
                    <p class="block text-lg font-semibold text-cyan-900">Estado: </p>
                    <p class="w-full bg-gray-100 rounded-md p-3">{{ $usuario->endereco->uf->nome ??  '-'}}</p>
                </div>

            </div>
        </div>
    </div>
    <br>

    <a href="{{route ('update')}}"><button type="button" class="bg-green-500 hover:bg-green-600 text-white rounded-md px-4 py-2 transition-transform duration-300 transform hover:scale-105">Editar</button></a>
    <a href="{{route ('home')}}"><button type="button" class="bg-sky-500 hover:bg-sky-600 text-white rounded-md px-4 py-2 transition-transform duration-300 transform hover:scale-105">Voltar</button></a>


</div>