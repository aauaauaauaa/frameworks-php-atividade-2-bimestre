@extends('app')
@section('title', 'Detalhes do Cliente')

@section('content')
<div class="card">
  <div class="card-header">
      Detalhes do Cliente {{ $client->nome }}
  </div>
  <div class="card-body">
      <p>ID: {{ $client->id }}</p>
      <p>Nome: {{ $client->nome }}</p>
      <p>Endereço: {{ $client->endereco }}</p>
      <p>Observação: {{ $client->observacao }}</p>

      <a href="{{ route('clients.index') }}">Voltar para a lista de clientes</a>
  </div>
</div>
@endsection
