
<h1>Usuarios</h1>

    <table class="table">
    <thead>
        <tr>
            <th>Usuario</th>
            <th>Classificação</th>
            <th>Telefone</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($usuarios as $usuario)
                <tr>
                    <td>{{ $usuario->name }}</td>
                    <td>{{ $usuario->classificacao->tipo }}</td>
                    <td>{{ $usuario->telefone }}</td>
                    <td><a href=" {{route ('usuario.visualizar', $usuario->id)}}" class="btn btn-primary"><button>Visualizar</button></a></td>
                   
                </tr>
            @endforeach
        
    </tbody>
</table>



<a href="{{route ('home')}}"><button type="button">Voltar</button></a>

<a href="{{route ('servicos')}}"><button type="button">Serviços</button></a>