@extends('pattern.header')

@section('titulo', 'Bairro Melhor - Criar Serviços')

@section('conteudo')

@section('content')

@include('pattern.navbar')

<div class="bg-slate-100 text-justify p-7 m-6 shadow-xl rounded-lg  mx-auto w-screen">
    <div class="mb-6">
        <h1 class="font-semibold text-3xl tracking-wide text-center text-sky-600">Criar Serviço</h1>
    </div>

    <div class="bg-white p-6 rounded-lg shadow-lg max-w-5xl mx-auto">

        <div class=" gap-6">
            <form action="{{route('create')}}" method="post">
                @csrf

                <div>
                    <label for="nome" class="block text-lg font-semibold text-cyan-900">Descrição Serviço:</label>
                    <textarea id="desc" name="desc" required   class="w-full bg-gray-100 border rounded-md p-3">

</textarea>
                </div>

                <div>
                    <label for="Tipo" class="block text-lg font-semibold text-cyan-900">Tipo:</label>
                    <select id="tipo" name="tipo"  class=" bg-gray-100 border rounded-md p-3">
                        <option value="">--</option>
                        @foreach($tipoServicos as $tipoServico)
                        <option value="{{$tipoServico->id}}">{{$tipoServico->descricao}}</option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <label for="data" class="block text-lg font-semibold text-cyan-900">Data:</label>
                    <input type="date" id="data" name="data" class="bg-gray-100 border rounded-md p-3">
                </div>

                <div>
                    <label for="Endereco" class="block text-lg font-semibold text-cyan-900">Endereço:</label>
                    <select id="Endereco" name="Endereco"  class="w-full bg-gray-100 border rounded-md p-3">
                        <option value="">--</option>
                        @foreach($enderecos as $endereco)
                        <option value="{{$endereco->id}}">{{ $endereco->Rua }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="flex justify-center p-3">
                    <button type="submit" class="bg-green-500 hover:bg-green-600 text-white rounded-md px-4 py-2 transition-transform duration-300 transform hover:scale-105">Cadastrar</button>
                </div>

            </form>
        </div>
    </div>
        <div>
                <a href="{{route ('servicos')}}" class="bg-sky-500 hover:bg-sky-600 text-white rounded-md px-4 py-2 transition-transform duration-300 transform hover:scale-105"><button type="button">Voltar</button></a>
            </div>
</div>
            <!-- <br><br><br><br><br><br>
@if ($servicos->isEmpty())
    <p>Nenhum serviço encontrado.</p>
@else
    @foreach ($servicos as $servico)
        <p>{{ $servico->Descricao_servico }}</p> 
    @endforeach
@endif -->