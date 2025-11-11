@extends('layouts.app')
@section('title','Nova Categoria')
@section('content')
<h1>Nova Categoria</h1>
<form method="POST" action="{{ route('categorias.store') }}">
  @csrf
  <div class="mb-3">
    <label class="form-label">Nome</label>
    <input name="nome" class="form-control" value="{{ old('nome') }}">
    @error('nome') <div class="text-danger small">{{ $message }}</div> @enderror
  </div>
  <button class="btn btn-primary">Salvar</button>
  <a href="{{ route('categorias.index') }}" class="btn btn-secondary">Cancelar</a>
</form>
@endsection
