<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\TarefaController;

Route::resource('categorias', CategoriaController::class);
Route::resource('tarefas', TarefaController::class);
