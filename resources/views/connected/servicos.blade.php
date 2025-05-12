@extends('pattern.header')

@section('titulo', 'Bairro Melhor - Serviços')

@section('conteudo')

@section('content')

@include('pattern.navbar')

<div class="bg-slate-100 text-justify p-7 m-6 shadow-xl rounded-lg  mx-auto w-screen">
    <div class="mb-6">
        <h1 class="font-semibold text-3xl tracking-wide text-center text-sky-600"><a href="{{route ('servicos')}}"> Lista de Serviços</a></h1>
    </div>

    <div>
        <div class="flex gap-2">
            <form action="{{route ('ordenar.servico')}}" method="GET" class="mb-4 gap-2">

                <select name="status" class="border p-2 rounded">
                    <option value="">Todos</option>
                    <option value="pendente">Pendentes</option>
                    <option value="Em andamento">Em Andamento</option>
                    <option value="Concluido">Concluídos</option>
                </select>

                <select name="ordenacao" class="border p-2 rounded">
                    <option value="recentes">Mais Recentes</option>
                    <option value="antigos">Mais Antigos</option>
                </select>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Ordenar</button>


            </form>
            <a href="{{route ('MeuServicos.servico')}}"><button class="bg-blue-500 text-white px-4 py-2 rounded">Meu Servicos</button></a>

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
                                <td class="border border-slate-300 p-1">{{ $servico->id }}</td>
                                <td class="border border-slate-300 p-1">{{ \Illuminate\Support\Str::limit($servico->Descricao_servico, 30, '...') }}</td>
                                <td class="border border-slate-300 p-1">{{ $servico->Status }}</td>
                                <td class="border border-slate-300 p-1">{{ \Carbon\Carbon::parse($servico->data_criacao)->format('d/m/Y') }}</td>
                                <td class="border border-slate-300 text-center align-middle">
                                    <div class="inline-flex space-x-2 mb-2">
                                        <a href="{{route ('servico.visualizar', $servico->id)}}"><button class="bg-green-400 hover:bg-green-700 text-white rounded-md mt-2 p-3 transition-transform duration-300 transform hover:scale-105 ">Visualizar</button></a>
                                        @if (auth()->user()->classificacao_id === 2)
                                        <a href="{{route ('servico.editar', $servico->id)}}"><button class="bg-blue-400 hover:bg-blue-700 text-white rounded-md mt-2 p-3 transition-transform duration-300 transform hover:scale-105 ">Editar</button></a>

                                        <form action="{{route ('servico.destroy', $servico->id)}}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="bg-red-400 hover:bg-red-700 text-white rounded-md  mt-2 p-3 transition-transform duration-300 transform hover:scale-105  ">Excluir</button>
                                    </div>
                                    </form>

                                    @endif
                                </td>
                            </tr>
                            <tr class="h-1"></tr>
                            @endforeach
                            @endif
                        </tbody>

                        <div class="mt-4">
                            {{ $servicos->appends(request()->query())->links('pagination::tailwind') }}
                        </div>
                    </table>

                    {{ $servicos->appends(request()->query())->links('pagination::tailwind') }}
                </div>
            </div>

        </div>


    </div>
</div>