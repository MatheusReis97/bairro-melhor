@extends('pattern.header')

@section('titulo', 'Bairro Melhor - Usuários')

@section('conteudo')

@section('content')

<nav class="bg-sky-950 text-white">
    <div class="container mx-auto px-4 py-3 flex justify-between items-center">

        <div class="flex gap-8">
            <img class="shadow-md rounded-full box-border h-14 w-14 p-2" src="{{asset('img/bairro-melhor-logo.png')}}" alt="logo-Bairro-Melhor">
        </div>

        <div class="flex gap-4 mt-2">
            <a href="{{route ('perfil')}}"><button class="bg-sky-500 hover:bg-sky-600 text-white rounded-md px-4 py-2 transition-transform duration-300 transform hover:scale-105">Perfil</button></a>
            <a href="{{route('home')}}"><button class="bg-sky-500 hover:bg-sky-600 text-white rounded-md px-4 py-2 transition-transform duration-300 transform hover:scale-105">Dashboard</button></a>
            <form action="{{route('logout')}}" method="POST">
                @csrf
                <button type="submit" class="bg-sky-500 hover:bg-sky-600 text-white rounded-md px-4 py-2 transition-transform duration-300 transform hover:scale-105">
                    Sair
                </button>
            </form>

        </div>
    </div>
</nav>

<div class="bg-slate-300 text-justify p-7 m-6 shadow-xl rounded-lg  mx-auto w-screen">
    <div class="mb-6">
        <h1 class="font-semibold text-3xl tracking-wide text-center text-sky-600">Usuarios</h1>
    </div>


<table class="w-full text-center col-end-2">
    <thead>
        <tr>
            <th class="border border-slate-700 p-3 font-mono font-bold tracking-wide">Usuário</th>
            <th class="border border-slate-700 p-3 font-mono font-bold tracking-wide">Classificação</th>
            <th class="border border-slate-700 p-3 font-mono font-bold tracking-wide">Telefone</th>
            <th class="border border-slate-700 p-3 font-mono font-bold tracking-wide">Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($usuarios as $usuario)
        <tr>
            <td class="border border-slate-100 p-1">{{ $usuario->name }}</td>
            <td class="border border-slate-100 p-1">{{ $usuario->classificacao->tipo }}</td>
            <td class="border border-slate-100 p-1">{{ $usuario->telefone }}</td>
            <td class="border border-slate-100 p-1">
                <div class="p-2 m-2">
                <a href=" {{route ('usuario.visualizar', $usuario->id)}}"class="bg-green-400 hover:bg-green-700 text-white rounded-md mt-2 p-3 transition-transform duration-300 transform hover:scale-105 "><button>Visualizar</button></a></td>

                </div>
        </tr>
        @endforeach

    </tbody>
</table>
</div>

<div class="gap-2 flex ml-4">
    <a href="{{route ('home')}}" class="bg-sky-500 hover:bg-sky-600 text-white rounded-md px-4 py-2 transition-transform duration-300 transform hover:scale-105"><button type="button">Voltar</button></a>

<a href="{{route ('servicos')}}" class="bg-sky-500 hover:bg-sky-600 text-white rounded-md px-4 py-2 transition-transform duration-300 transform hover:scale-105" ><button type="button">Serviços</button></a>

</div>
