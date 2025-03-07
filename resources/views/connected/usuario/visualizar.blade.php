<div class="container">
    <h1> Visualizador de Usuario</h1>
</div>

<a href="{{route ('home')}}"><button type="button">Inicio</button></a>

<div>
<div>
    
    <label for="registro">ID usuario:</label>
    <p>{{ $usuario->id ?? 'Não informado' }}</p> 
    <br>

    
    <label for="nomma">Nome:</label>
    <p>{{ $usuario->name}}</p>
    <br>

    <label for="classificacao">Classificacao:</label>
    <p>{{ $usuario->classificacao->tipo ?? "Não preenchido"}}</p>
    <br>

    <label for="data">data de nascimento:</label>
    <p> {{ \Carbon\Carbon::parse($usuario->Nascimento ?? 'Não informado')->format('d/m/Y') }}</p>
    <br>

    <label for="tipo">Email:</label>
    <p>{{ $usuario->email ?? 'Não informado' }}</p>
    <br>
    <label for="endereco">Endereço:</label>
    <p>{{ $usuario->endereco->Rua ?? 'Não informado' }}</p>
    <br>
    <label for="CEP">CEP:</label>
    <p>{{ $usuario->endereco->CEP ?? 'Não informado' }}</p>
    <br>
    <label for="Bairro">Bairro:</label>
    <p>{{ $usuario->endereco->bairro->bairro ?? 'Não informado' }}</p>
    <br>

    
</div>


<a href="{{route ('home')}}"><button type="button">Voltar</button></a>

<a href="{{route ('usuario.editar',  $usuario->id  )}}"><button type="button">Editar</button></a>



<form action="{{route ('usuario.deletar', $usuario->id)}}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Excluir</button>
                        </form>

</div>