<style>
    .container{
        background-color: yellowgreen;
    }
</style>

@section('content')
<div class="container">
    <h1>SERVIÇOS</h1>

    <!-- Exibe mensagem de sucesso, se houver -->
    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif <!-- Faltava este fechamento -->

    <table class="table">
    <thead>
        <tr>
            <th>Descrição do Serviço</th>
            <th>Status</th>
            <th>Data de Criação</th>
         
            <th>Ações</th>
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
                    <td>{{ $servico->Descricao_servico }}</td>
                    <td>{{ $servico->status }}</td>
                    <td>{{ \Carbon\Carbon::parse($servico->data_criacao)->format('d/m/Y') }}</td>
                    
                    <td>
                    <a href="{{route ('servico.visualizar', $servico->id)}}" class="btn btn-primary"><button>Visualizar</button></a>
                        <a href="{{route ('servico.editar', $servico->id)}}" class="btn btn-primary"><button>Editar</button></a>
                        
                        <form action="{{route ('servico.destroy', $servico->id)}}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        @endif
    </tbody>
</table>

</div>


<a href="{{route ('criar')}}"><button type="button">Criar</button></a>
<a href="{{route ('home')}}"><button type="button">Inicio</button></a>



