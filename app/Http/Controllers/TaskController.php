<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    // Método para mostrar todas las tareas
    public function index()    
    {
        $tasks = Task::all(); // Obtener todas las tareas
        return view('task.index', compact('tasks')); // Pasar las tareas a la vista
    }

    // Método para almacenar una nueva tarea
    public function store(Request $request)
    {   
        $request->validate([
            'task' => 'required|string|max:255', // Validar que el campo 'task' es requerido y es una cadena de texto
        ]);

        Task::create([
            'task' => $request->input('task'), // Crear una nueva tarea con el valor del campo 'task'
        ]);

        return redirect()->route('tasks.index'); // Redirigir a la lista de tareas
    }

    // Método para eliminar una tarea
    public function destroy($id)
    {
        $task = Task::findOrFail($id); // Buscar la tarea por ID, lanzar un error si no se encuentra
        $task->delete(); // Eliminar la tarea

        return redirect()->route('tasks.index'); // Redirigir a la lista de tareas
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Task $task)
    {
        //
    }
}
