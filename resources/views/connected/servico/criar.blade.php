<h1> Criar colocação </h1>

<form action="{{route('create')}}" method="post">
@csrf

<label for="nome">Descrição Serviço:</label>
<textarea id="desc" name="desc" required >
Descreva a situação 
</textarea>

<label for="Tipo">Tipo:</label>

<select id="tipo" name="tipo">
  <option value="">--</option>
  @foreach($tipoServicos as $tipoServico)
  <option value="{{$tipoServico->id}}">{{$tipoServico->descricao}}</option>
  @endforeach
</select>

<label for="data">Data:</label>
<input type="datetime" id="data" name="data" >


<label for="Endereco">Endereço:</label>
<select id="Endereco" name="Endereco">
    <option value="">--</option>
    @foreach($enderecos as $endereco)
    <option value="{{$endereco->id}}">{{ $endereco->Rua }}</option>
    @endforeach
</select>

    <button type="submit">Cadastrar</button>
</form>

<br><br><br><br><br><br>
@if ($servicos->isEmpty())
    <p>Nenhum serviço encontrado.</p>
@else
    @foreach ($servicos as $servico)
        <p>{{ $servico->Descricao_servico }}</p> 
    @endforeach
@endif