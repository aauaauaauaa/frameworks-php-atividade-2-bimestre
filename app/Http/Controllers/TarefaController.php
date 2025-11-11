<?php

namespace App\Http\Controllers;

use App\Models\Tarefa;
use App\Models\Categoria;
use Illuminate\Http\Request;

class TarefaController extends Controller
{
    public function index()
    {
        $tarefas = Tarefa::with('categoria')->orderBy('created_at','desc')->get();
        return view('tarefas.index', compact('tarefas'));
    }

    public function create()
    {
        $categorias = Categoria::orderBy('nome')->get();
        return view('tarefas.create', compact('categorias'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|min:3',
            'descricao' => 'required',
            'categoria_id' => 'required|exists:categorias,id',
        ]);

        Tarefa::create([
            'titulo' => $request->titulo,
            'descricao' => $request->descricao,
            'concluida' => $request->has('concluida') ? true : false,
            'categoria_id' => $request->categoria_id,
        ]);

        return redirect()->route('tarefas.index')->with('success', 'Tarefa criada.');
    }

    public function edit(Tarefa $tarefa)
    {
        $categorias = Categoria::orderBy('nome')->get();
        return view('tarefas.edit', compact('tarefa','categorias'));
    }

    public function update(Request $request, Tarefa $tarefa)
    {
        $request->validate([
            'titulo' => 'required|min:3',
            'descricao' => 'required',
            'categoria_id' => 'required|exists:categorias,id',
        ]);

        $tarefa->update([
            'titulo' => $request->titulo,
            'descricao' => $request->descricao,
            'concluida' => $request->has('concluida') ? true : false,
            'categoria_id' => $request->categoria_id,
        ]);

        return redirect()->route('tarefas.index')->with('success', 'Tarefa atualizada.');
    }

    public function destroy(Tarefa $tarefa)
    {
        $tarefa->delete();
        return redirect()->route('tarefas.index')->with('success', 'Tarefa removida.');
    }
}
