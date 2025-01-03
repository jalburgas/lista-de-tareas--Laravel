<html>
<head>
    <title>Editar Tarea</title>
    <!-- Agregar Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Editar Tarea</h2>
        <form action="{{ route('tasks.update', $task->id) }}" method="post" class="form-inline mb-3">
            @csrf
            @method('PUT')
            <div class="form-group mr-2">
                <input type="text" name="task" class="form-control" value="{{ $task->task }}" placeholder="Escribe tu tarea">
            </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
        <a href="{{ route('tasks.index') }}" class="btn btn-secondary">Cancelar</a>
    </div>
    <!-- Agregar Bootstrap JS y dependencias -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>