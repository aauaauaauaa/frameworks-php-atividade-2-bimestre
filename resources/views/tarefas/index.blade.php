@extends('layouts.app')
@section('title','Tarefas')
@section('content')
<div class="d-flex justify-content-between mb-3">
  <h1>Tarefas</h1>
  <a href="{{ route('tarefas.create') }}" class="btn btn-primary align-self-center">Nova Tarefa</a>
</div>
<table class="table table-striped">
  <thead><tr><th>Título</th><th>Categoria</th><th>Concluída</th><th>Ações</th></tr></thead>
  <tbody>
    @foreach($tarefas as $t)
      <tr>
        <td>{{ $t->titulo }}</td>
        <td>{{ $t->categoria?->nome }}</td>
        <td>{{ $t->concluida ? 'Sim' : 'Não' }}</td>
        <td>
          <a href="{{ route('tarefas.edit', $t) }}" class="btn btn-sm btn-secondary">Editar</a>
          <form action="{{ route('tarefas.destroy', $t) }}" method="POST" style="display:inline-block">
            @csrf @method('DELETE')
            <button class="btn btn-sm btn-danger" onclick="return confirm('Remover?')">Remover</button>
          </form>
        </td>
      </tr>
    @endforeach
  </tbody>
</table>
@endsection
