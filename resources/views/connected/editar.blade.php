@extends('pattern.header')

@section('titulo', 'Bairro Melhor - Perfil')

@section('conteudo')


@section('content')

@include('pattern.navbar')

<div class="bg-slate-100 text-justify p-7 m-6 shadow-xl rounded-lg  mx-auto">
    <div class="mb-6">
        <h1 class="font-semibold text-3xl tracking-wide text-center text-sky-600"> Perfil do Usuário</h1>
    </div>

    <!-- Exibe mensagem de sucesso, se houver -->
    @if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
    @endif

    <div class="bg-white p-6 rounded-lg shadow-lg max-w-5xl mx-auto">
        <form action="{{ route('edit') }}" method="POST"
            class="bg-white p-6 rounded-lg shadow-lg max-w-2xl mx-auto">
            @csrf
            @method('PUT')
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label for="nome" class="block text-lg font-semibold text-cyan-900">Nome :</label>
                    <input type="text" id="name" name="name" value="{{ $usuario->name }}" class="w-full bg-gray-100 rounded-md p-2">
                </div>

                <div>
                    <label for="email" class="block text-lg font-semibold text-cyan-900">Email :</label>
                    <input type="email" id="email" name="email" value="{{ $usuario->email }}" class="w-full bg-gray-100 rounded-md p-2">
                </div>

                <div>
                    <label for="telefone" class="block text-lg font-semibold text-cyan-900">Telefone :</label>
                    <input type="tel" id="telefone" name="telefone" value="{{ $usuario->telefone }}" class="w-full bg-gray-100 rounded-md p-2">
                </div>

                <div>
                    <label for="data-nascimento" class="block text-lg font-semibold text-cyan-900">Data Nascimento : </label>
                    <input type="date" id="Nascimento" name="Nascimento" value="{{ $usuario->Nascimento }}" class="w-full bg-gray-100 rounded-md p-2">
                </div>

                <!-- Campos para edição do endereço -->
                <h2 class="font-normal text-2xl tracking-wide text-left text-sky-400">Endereço</h2>
                <br>

                <div class="flex">
                    <label for="rua" class="block text-lg font-semibold text-cyan-900 p-2">CEP:</label>
                    <input type="text" id="CEP" name="CEP" value="{{ $usuario->endereco ? $usuario->endereco->CEP : '' }}" class="w-full bg-gray-100 rounded-md p-2">
                    <button type="button" class="bg-sky-300 m-2 hover:bg-sky-500 text-white rounded-md px-4 py-2 transition-transform duration-300 transform hover:scale-105" onclick="buscarEndereco()">Buscar</button>
                </div><br>

                <div>
                    <label for="rua" class="block text-lg font-semibold text-cyan-900">Rua :</label>
                    <input type="text" id="Rua" name="Rua" value="{{ $usuario->endereco ? $usuario->endereco->Rua : '' }}" class="w-full bg-gray-100 rounded-md p-2">
                </div>

                <div>
                    <label for="num_casa" class="block text-lg font-semibold text-cyan-900">Número :</label>
                    <input type="text" id="Num_Casa" name="Num_Casa" value="{{ $usuario->endereco ? $usuario->endereco->Num_Casa : '' }}" class="w-full bg-gray-100 rounded-md p-2">
                </div>

                <div>
                    <label for="complemento" class="block text-lg font-semibold text-cyan-900">Complemento :</label>
                    <input type="text" id="Complemento" name="Complemento" value="{{ $usuario->endereco ? $usuario->endereco->Complemento : '' }}" class="w-full bg-gray-100 rounded-md p-2">
                </div>

                <div>
                    <label for="cidade" class="block text-lg font-semibold text-cyan-900">Bairro:</label>
                    <input type="text" id="bairro" name="bairro" value="{{ $usuario->endereco ? $usuario->endereco->bairro->bairro : '' }}" class="w-full bg-gray-100 rounded-md p-2">
                </div>

                <div>
                    <label for="cidade" class="block text-lg font-semibold text-cyan-900">Cidade :</label>
                    <input type="text" id="cidade" name="cidade" value="{{ $usuario->endereco ? $usuario->endereco->cidade->cidade : '' }}" class="w-full bg-gray-100 rounded-md p-2">
                </div>

                <div>
                    <label for="estado" class="block text-lg font-semibold text-cyan-900">Estado :</label>
                    <input type="text" id="sigla" name="sigla" value="{{ $usuario->endereco ? $usuario->endereco->uf->sigla : '' }}" class="w-full bg-gray-100 rounded-md p-2">
                </div>
                <br>

                <!-- Botão de enviar -->
                <div>
                    <button type="submit" class="bg-green-400 m-2 hover:bg-green-600 text-white rounded-md px-4 py-2 transition-transform duration-300 transform hover:scale-105">Salvar Alterações</button>

                    <a href="{{route ('perfil')}}"><button type="button" class="bg-sky-300 m-2 hover:bg-sky-500 text-white rounded-md px-4 py-2 transition-transform duration-300 transform hover:scale-105">Voltar</button></a>
                </div>
        </form>
    </div>
</div>
</div>
<script src="{{ asset('js/connected/apiCep.js') }}"></script>