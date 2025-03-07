@extends('pattern.header')

@section('titulo', 'Bairro Melhor - Serviços')

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

<div class="bg-slate-100 text-justify p-7 m-6 shadow-xl rounded-lg  mx-auto w-screen">
    <div class="mb-6">
        <h1 class="font-semibold text-2xl tracking-wide text-center text-sky-600"> Lista de Serviços</h1>
    </div>

    <div>
    <a href="{{route ('criar')}}"><button type="button">Criar</button></a>
    <!-- Aqui vai ter um botão filtro -->
    <a href="{{route ('criar')}}"><button type="button">Restaurar</button></a>

    </div>

    <div>
        <div>

        <div class=""> 
           
            @if (session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
            @endif

            <table class="w-full text-center col-end-2">
                <thead>
                    <tr>
                    <th class="p-3 font-bold tracking-wide">Núm</th>
                        <th class="p-3 font-bold tracking-wide">Descrição do Serviço</th>
                        <th class="p-3 font-bold tracking-wide">Status</th>
                        <th class="p-3 font-bold tracking-wide">Data de Criação</th>
                        <th class="p-3 font-bold tracking-wide">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($servicos->isEmpty())
                    <tr>
                        <td colspan="5">Nenhum serviço encontrado.</td>
                    </tr>
                    @else
                    @foreach ($servicos as $servico)
                    <tr>
                        <td  class="border border-slate-300 p-1">{{ $servico->id }}</td>
                        <td class="border border-slate-300 p-1">{{ \Illuminate\Support\Str::limit($servico->Descricao_servico, 30, '...') }}</td>
                        <td  class="border border-slate-300 p-1">{{ $servico->Status }}</td>
                        <td  class="border border-slate-300 p-1">{{ \Carbon\Carbon::parse($servico->data_criacao)->format('d/m/Y') }}</td>
                        <td  class="border border-slate-300 text-center align-middle">
                        <div class="inline-flex space-x-2">
                            <a href="{{route ('servico.visualizar', $servico->id)}}" ><button class="bg-green-400 hover:bg-green-700 text-white rounded-md mt-2 p-3 transition-transform duration-300 transform hover:scale-105 ">Visualizar</button></a>
                            <a href="{{route ('servico.editar', $servico->id)}}" ><button class="bg-blue-400 hover:bg-blue-700 text-white rounded-md mt-2 p-3 transition-transform duration-300 transform hover:scale-105 ">Editar</button></a>

                            <form action="{{route ('servico.destroy', $servico->id)}}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-400 hover:bg-red-700 text-white rounded-md  mt-2 p-3 transition-transform duration-300 transform hover:scale-105  ">Excluir</button>
                                </div>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    @endif
                </tbody>
            </table>


        </div>
    </div>

    </div>


</div>
</div>