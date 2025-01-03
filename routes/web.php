<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController; 

// Ruta para mostrar todas las tareas
Route::get('/', [TaskController::class, 'index'])->name('tasks.index');

// Ruta para almacenar una nueva tarea
Route::post('/', [TaskController::class, 'store']);

// Ruta para editar una tarea
Route::get('/{id}/edit', [TaskController::class, 'edit'])->name('tasks.edit');

// Ruta para actualizar una tarea
Route::put('/{id}', [TaskController::class, 'update'])->name('tasks.update');

// Ruta para eliminar una tarea
Route::delete('/{id}', [TaskController::class, 'destroy'])->name('tasks.destroy');

