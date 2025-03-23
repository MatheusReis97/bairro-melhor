@extends('pattern.header')

@section('titulo', 'Bairro Melhor - Visualizar')

@section('conteudo')

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
        <h1 class="font-semibold text-3xl tracking-wide text-center text-sky-600"> Visualizador de Usuário</h1>
    </div>

    <div class="bg-white p-6 rounded-lg shadow-lg max-w-7xl mx-auto">

        <div class="grid grid-cols-3 gap-6 ">
                <img src="{{ $usuario->imagem_url }}" alt="imagem Perfil" class=" shadow-md rounded-full box-border p-2 h-40 w-40">
            </div>
            <br>
        
        <div class="text-center">
            <label for="registro"  class="block text-lg font-semibold text-cyan-900">ID usuario:</label>
            <p class=" bg-gray-100 border rounded-md p-3">{{ $usuario->id ?? 'Não informado' }}</p>
            <br>


            <label for="nome"  class="block text-lg font-semibold text-cyan-900">Nome:</label>
            <p class=" bg-gray-100 border rounded-md p-3">{{ $usuario->name}}</p>
            <br>

            <label for="classificacao"  class="block text-lg font-semibold text-cyan-900">Classificacao:</label>
            <p class=" bg-gray-100 border rounded-md p-3">{{ $usuario->classificacao->tipo ?? "Não preenchido"}}</p>
            <br>

            <label for="data"  class="block text-lg font-semibold text-cyan-900">data de nascimento:</label>
            <p class=" bg-gray-100 border rounded-md p-3"> {{ \Carbon\Carbon::parse($usuario->Nascimento ?? 'Não informado')->format('d/m/Y') }}</p>
            <br>

            <label for="tipo"  class="block text-lg font-semibold text-cyan-900">Email:</label>
            <p class=" bg-gray-100 border rounded-md p-3">{{ $usuario->email ?? 'Não informado' }}</p>
            <br>
            <label for="endereco"  class="block text-lg font-semibold text-cyan-900">Endereço:</label>
            <p class=" bg-gray-100 border rounded-md p-3">{{ $usuario->endereco->Rua ?? 'Não informado' }}</p>
            <br>
            <label for="CEP"  class="block text-lg font-semibold text-cyan-900">CEP:</label>
            <p class=" bg-gray-100 border rounded-md p-3">{{ $usuario->endereco->CEP ?? 'Não informado' }}</p>
            <br>
            <label for="Bairro"  class="block text-lg font-semibold text-cyan-900" >Bairro:</label>
            <p class=" bg-gray-100 border rounded-md p-3">{{ $usuario->endereco->bairro->bairro ?? 'Não informado' }}</p>
            <br>
            </div>


        </div>


        <div class="flex justify-center gap-2 mt-4">
            <a href="{{route ('home')}}"><button type="button" class="bg-sky-500 hover:bg-sky-600 text-white rounded-md px-4 py-2 transition-transform duration-300 transform hover:scale-105">Voltar</button></a>

            <a href="{{route ('usuario.editar',  $usuario->id  )}}"><button type="button" class="bg-green-500 hover:bg-green-600 text-white rounded-md px-4 py-2 transition-transform duration-300 transform hover:scale-105">Editar</button></a>



            <form action="{{route ('usuario.deletar', $usuario->id)}}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="bg-red-500 hover:bg-red-600 text-white rounded-md px-4 py-2 transition-transform duration-300 transform hover:scale-105">Excluir</button>
            </form>

        </div>
    </div>
</div>