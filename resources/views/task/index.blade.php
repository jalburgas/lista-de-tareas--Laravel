<html>
<head>
    <title>Aplicacion todolist</title>
</head>
<body>
    <form action="{{url('/')}}" method="post">
        @csrf
        <input type="text" name="task" placeholder="Escribe tu tarea">
        <input type="submit" value="Guardar">
    </form>
    <br>
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
                        <a href="{{url('/'.$task->id.'/edit')}}">Editar</a>
                        <a href="{{url('/'.$task->id.'/delete')}}">Eliminar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
