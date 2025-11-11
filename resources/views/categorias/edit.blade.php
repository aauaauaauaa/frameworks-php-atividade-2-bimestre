@extends('layouts.app')
@section('title','Editar Categoria')
@section('content')
<h1>Editar Categoria</h1>
<form method="POST" action="{{ route('categorias.update', $categoria) }}">
  @csrf @method('PUT')
  <div class="mb-3">
    <label class="form-label">Nome</label>
    <input name="nome" class="form-control" value="{{ old('nome', $categoria->nome) }}">
    @error('nome') <div class="text-danger small">{{ $message }}</div> @enderror
  </div>
  <button class="btn btn-primary">Atualizar</button>
  <a href="{{ route('categorias.index') }}" class="btn btn-secondary">Cancelar</a>
</form>
@endsection
