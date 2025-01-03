<html>
<head>
    <title>Aplicacion todolist Laravel</title>
</head>
<body>
    <!-- Formulario para agregar una nueva tarea -->
    <form action="{{url('/')}}" method="post">
        @csrf
        <input type="text" name="task" placeholder="Escribe tu tarea">
        <input type="submit" value="Guardar">
    </form>
    <br>
    <!-- Tabla para mostrar las tareas -->
    <table border="1">
        <thead>
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
                        <a href="{{url('/'.$task->id.'/edit')}}">Editar</a>
                        <!-- Formulario para eliminar la tarea -->
                        <!-- ADVERTENCIA: Al hacer clic en el botón de eliminar, la tarea será eliminada permanentemente -->
                        <form action="{{route('tasks.destroy', $task->id)}}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
