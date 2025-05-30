<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarefa;

class TarefaController extends Controller
{
    public function index() {
        $tarefas = Tarefa::all();
        return view('tarefas.index', compact('tarefas'));
    }

    public function store(Request $request) {
        Tarefa::create($request->all());
        return redirect()->route('tarefas.index');
    }

    public function destroy($id) {
        Tarefa::destroy($id);
        return redirect()->route('tarefas.index');
    }
}