<div class="container">
    <h1> Visualizador de Usuario</h1>
</div>

<a href="{{route ('home')}}"><button type="button">Inicio</button></a>

<div>
<div>
    <form action="{{ route('usuario.update',  $usuario->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="registro">ID usuario:</label>
    <input type="text" value=" {{ $usuario->id ?? 'Não informado' }}" name="id" 
        id="id"
    disabled> 
    <br>

    <label for="desc">Nome:</label>
    <input type="text" value="{{  $usuario->name}}" name="nome" id="nome">
    <br>


    <label for="data">data de nascimento:</label>
    <input type="date" value="{{ $usuario->Nascimento }}" name="data_nascimento" id="data_nascimento">
    <br>

    <label for="tipo">Classificacao de acesso:</label>
    <select name="classificacao" id="classificacao">
    <option value="{{ $usuario->classificacao->id}} ">{{ $usuario->classificacao->descricao }}</option>
    @foreach($classificacoes as $classificacao)
        @if($classificacao->id !== $usuario->classificacao_id)
            <option value="{{ $classificacao->id }}">{{ $classificacao->descricao }}</option>
        @endif
    @endforeach
    </select> <br>



    <label for="tipo">Email:</label>
    <input type="email" value="{{  $usuario->email ?? 'Não informado' }}" name="email" id="email">
    <br>

    <label for="tipo">Telefone:</label>
    <input type="tel" value="{{  $usuario->telefone ?? 'Não informado' }}" name="telefone" id="telefone">
    <br>

    <label for="endereco">Endereço:</label>
    <input type="text" value="{{  $usuario->endereco->Rua ?? 'Não informado' }} " name="endereco" id="endereco">
    <br>


    <label for="endereco">Número da Residência:</label>
    <input type="text" value="{{  $usuario->endereco->Num_Casa ?? 'Não informado' }} " name="num_casa" id="num_casa">
    <br>

    <label for="endereco">Complemento:</label>
    <input type="text" value="{{  $usuario->endereco->Complemento ?? 'Não informado' }} " name="complemento" id="complemento">
    <br>
    <label for="CEP">CEP:</label>
     <input value="{{ $usuario->endereco->CEP ?? 'Não informado' }}" id="CEP" name="CEP">
    <br>
    <label for="Bairro">Bairro:</label>
    <input value="{{ $usuario->endereco->bairro->bairro ?? 'Não informado' }}" name="bairro" id="bairro">
    <br>

    <button type="submit">Salvar</button>
    </form>
    
</div>


<a href="{{route ('home')}}"><button type="button">Voltar</button></a>



</div>