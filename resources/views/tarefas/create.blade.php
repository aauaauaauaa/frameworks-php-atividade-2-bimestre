@extends('layouts.app')
@section('title','Nova Tarefa')
@section('content')
<h1>Nova Tarefa</h1>
<form method="POST" action="{{ route('tarefas.store') }}">
  @csrf
  <div class="mb-3">
    <label class="form-label">Título</label>
    <input name="titulo" class="form-control" value="{{ old('titulo') }}">
    @error('titulo') <div class="text-danger small">{{ $message }}</div> @enderror
  </div>

  <div class="mb-3">
    <label class="form-label">Descrição</label>
    <textarea name="descricao" class="form-control">{{ old('descricao') }}</textarea>
    @error('descricao') <div class="text-danger small">{{ $message }}</div> @enderror
  </div>

  <div class="mb-3">
    <label class="form-label">Categoria</label>
    <select name="categoria_id" class="form-select">
      <option value="">-- selecione --</option>
      @foreach($categorias as $c)
        <option value="{{ $c->id }}" {{ old('categoria_id') == $c->id ? 'selected' : '' }}>{{ $c->nome }}</option>
      @endforeach
    </select>
    @error('categoria_id') <div class="text-danger small">{{ $message }}</div> @enderror
  </div>

  <div class="form-check mb-3">
    <input type="checkbox" class="form-check-input" id="concluida" name="concluida" {{ old('concluida') ? 'checked' : '' }}>
    <label for="concluida" class="form-check-label">Concluída</label>
  </div>

  <button class="btn btn-primary">Salvar</button>
  <a href="{{ route('tarefas.index') }}" class="btn btn-secondary">Cancelar</a>
</form>
@endsection
