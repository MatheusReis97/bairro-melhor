@extends('pattern.header')

@section('titulo', 'Bairro Melhor - Editar Perfil')

@section('conteudo')


@section('content')

@include('pattern.navbar')

<div class="bg-slate-100 text-justify p-7 m-6 shadow-xl rounded-lg  mx-auto">
    <div class="mb-6">
        <h1 class="font-semibold text-3xl tracking-wide text-center text-sky-600"> Visualizador de Usuario</h1>
    </div>


    <div class="bg-white p-6 rounded-lg shadow-lg max-w-5xl mx-auto">
        <div>
            <form action="{{ route('usuario.update',  $usuario->id) }}" method="POST" class="bg-white p-6 rounded-lg shadow-lg max-w-2xl mx-auto">
                @csrf
                @method('PUT')

                <label for="registro" class="block text-lg font-semibold text-cyan-900">ID usuario:</label>
                <input type="text" value=" {{ $usuario->id ?? 'Não informado' }}" name="id"
                    id="id"
                    disabled class="w-full bg-gray-400 rounded-md text-center p-2 text-center">
                <br>

                <label for="desc" class="block text-lg font-semibold text-cyan-900">Nome:</label>
                <input type="text" value="{{  $usuario->name}}" name="nome" id="nome" class="w-full bg-gray-200 rounded-md text-center p-2 border border-separate">
                <br>


                <label for="data" class="block text-lg font-semibold text-cyan-900">data de nascimento:</label>
                <input type="date" value="{{ $usuario->Nascimento }}" name="data_nascimento" id="data_nascimento" class="w-full bg-gray-200 rounded-md text-center p-2">
                <br>

                <label for="tipo" class="block text-lg font-semibold text-cyan-900">Classificacao de acesso:</label>
                <select name="classificacao" id="classificacao" class="w-full bg-gray-200 rounded-md text-center p-2">
                    <option value="{{ $usuario->classificacao->id}} ">{{ $usuario->classificacao->descricao }}</option>
                    @foreach($classificacoes as $classificacao)
                    @if($classificacao->id !== $usuario->classificacao_id)
                    <option value="{{ $classificacao->id }}">{{ $classificacao->descricao }}</option>
                    @endif
                    @endforeach
                </select> <br>



                <label for="tipo" class="block text-lg font-semibold text-cyan-900">Email:</label>
                <input type="email" value="{{  $usuario->email ?? 'Não informado' }}" name="email" id="email" class="w-full bg-gray-200 rounded-md text-center p-2">
                <br>

                <label for="tipo" class="block text-lg font-semibold text-cyan-900">Telefone:</label>
                <input type="tel" value="{{  $usuario->telefone ?? 'Não informado' }}" name="telefone" id="telefone" class="w-full bg-gray-200 rounded-md text-center p-2">
                <br>

                <label for="endereco" class="block text-lg font-semibold text-cyan-900">Endereço:</label>
                <input type="text" value="{{  $usuario->endereco->Rua ?? 'Não informado' }} " name="endereco" id="endereco" class="w-full bg-gray-200 rounded-md text-center p-2">
                <br>


                <label for="endereco" class="block text-lg font-semibold text-cyan-900">Número da Residência:</label>
                <input type="text" value="{{  $usuario->endereco->Num_Casa ?? 'Não informado' }} " name="num_casa" id="num_casa" class="w-full bg-gray-200 rounded-md text-center p-2">
                <br>

                <label for="endereco" class="block text-lg font-semibold text-cyan-900">Complemento:</label>
                <input type="text" value="{{  $usuario->endereco->Complemento ?? 'Não informado' }} " name="complemento" id="complemento" class="w-full bg-gray-200 rounded-md text-center p-2">
                <br>
                <label for="CEP" class="block text-lg font-semibold text-cyan-900">CEP:</label>
                <input value="{{ $usuario->endereco->CEP ?? 'Não informado' }}" id="CEP" name="CEP" class="w-full bg-gray-200 rounded-md text-center p-2">
                <br>
                <label for="Bairro" class="block text-lg font-semibold text-cyan-900">Bairro:</label>
                <input value="{{ $usuario->endereco->bairro->bairro ?? 'Não informado' }}" name="bairro" id="bairro" class="w-full bg-gray-200 rounded-md text-center p-2">
                <br>

                <button type="submit" class="bg-green-400 m-4 hover:bg-green-600 text-white rounded-md text-center px-4 py-2 transition-transform duration-300 transform hover:scale-105 ">Salvar</button>
            </form>

        </div>
        </div>
       
        <br>
        <div class=" flex justify-center  p-2 ">
            <a href="{{route ('home')}}" class="bg-sky-300 m-2 hover:bg-sky-500 text-white rounded-md px-4 py-2 transition-transform duration-300 transform hover:scale-105"><button type="button">Voltar</button></a>
        </div>

    </div>
