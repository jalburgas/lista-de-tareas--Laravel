<html>
<head>
    <title>Aplicacion todolist</title>
    <!-- Agregar Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <!-- Formulario para agregar una nueva tarea -->
        <form action="{{url('/')}}" method="post" class="form-inline mb-3">
            @csrf
            <div class="form-group mr-2">
                <input type="text" name="task" class="form-control" placeholder="Escribe tu tarea">
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
        
        <!-- Tabla para mostrar las tareas -->
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>Id</th>
                    <th>Tarea</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tasks as $task)
                    <tr>
                        <td>{{$task->id}}</td>
                        <td>{{$task->task}}</td>
                        <td>
                            <!-- Enlace para editar la tarea -->
                            <!-- <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-warning btn-sm">Editar</a> -->
                            <!-- Formulario para eliminar la tarea -->
                            <!-- ADVERTENCIA: Al hacer clic en el botón de eliminar, la tarea será eliminada permanentemente -->
                            <form action="{{route('tasks.destroy', $task->id)}}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- Agregar Bootstrap JS y dependencias -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
