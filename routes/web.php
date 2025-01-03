<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController; 

// Ruta para mostrar todas las tareas
Route::get('/', [TaskController::class, 'index'])->name('tasks.index');

// Ruta para almacenar una nueva tarea
Route::post('/', [TaskController::class, 'store']);

// Ruta para eliminar una tarea
Route::delete('/{id}', [TaskController::class, 'destroy'])->name('tasks.destroy');

