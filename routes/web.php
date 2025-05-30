<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TarefaController;

Route::get('/', [TarefaController::class, 'index'])->name('tarefas.index');
Route::post('/', [TarefaController::class, 'store'])->name('tarefas.store');
Route::delete('/{id}', [TarefaController::class, 'destroy'])->name('tarefas.destroy');