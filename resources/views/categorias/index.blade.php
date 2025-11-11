@extends('layouts.app')
@section('title','Categorias')
@section('content')
<div class="d-flex justify-content-between mb-3">
  <h1>Categorias</h1>
  <a href="{{ route('categorias.create') }}" class="btn btn-primary align-self-center">Nova Categoria</a>
</div>
<table class="table table-striped">
  <thead><tr><th>Nome</th><th>Ações</th></tr></thead>
  <tbody>
    @foreach($categorias as $c)
      <tr>
        <td>{{ $c->nome }}</td>
        <td>
          <a href="{{ route('categorias.edit', $c) }}" class="btn btn-sm btn-secondary">Editar</a>
          <form action="{{ route('categorias.destroy', $c) }}" method="POST" style="display:inline-block">
            @csrf @method('DELETE')
            <button class="btn btn-sm btn-danger" onclick="return confirm('Remover?')">Remover</button>
          </form>
        </td>
      </tr>
    @endforeach
  </tbody>
</table>
@endsection
