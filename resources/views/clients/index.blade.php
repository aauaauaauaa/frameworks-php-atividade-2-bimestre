@extends('app')
@section('title', 'Lista de Clientes')

@section('content')
<h1>Lista de Clientes</h1>
<table class="table">
  <thead>
    <tr>
      <th>ID</th>
      <th>Nome</th>
      <th>Endereço</th>
      <th>Ações</th>
    </tr>
  </thead>
  <tbody>
    @foreach($clients as $client)
      <tr>
        <td>{{ $client->id }}</td>
        <td>
          <a href="{{ route('clients.show', $client) }}">{{ $client->nome }}</a>
        </td>
        <td>{{ $client->endereco }}</td>
        <td>
          <a class="btn btn-primary" href="{{ route('clients.edit', $client) }}">
            Atualizar
          </a>

          <form action="{{ route('clients.destroy', $client) }}" method="POST">
            @csrf
            @method('DELETE')
            <button 
              class="btn btn-danger" 
              type="submit"
              onclick="return confirm('Deseja realmente excluir?')"
            >
              Apagar
            </button>
          </form>
        </td>
      </tr>
    @endforeach
  </tbody>
</table>

<a class="btn btn-success" href="{{ route('clients.create') }}">Novo Cliente</a>
@endsection
