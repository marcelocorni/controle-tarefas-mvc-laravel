<!DOCTYPE html>
<html>
<head>
    <title>Controle de Tarefas</title>
</head>
<body>
    <h1>Lista de Tarefas</h1>

    <form action="{{ route('tarefas.store') }}" method="POST">
        @csrf
        <input type="text" name="titulo" placeholder="Título da tarefa" required><br>
        <textarea name="descricao" placeholder="Descrição" rows="4" cols="50" required></textarea><br>
        <button type="submit">Adicionar</button>
    </form>

    <ul>
        @foreach($tarefas as $tarefa)
            <li>
                <strong>{{ $tarefa->titulo }}</strong><br>
                {{ $tarefa->descricao }}<br>
                <form action="{{ route('tarefas.destroy', $tarefa->id) }}" method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Excluir</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>