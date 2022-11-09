<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;


Route::get('tasks',[TaskController::class,'index']);
Route::get('task/{id}', [TaskController::class, 'show']);
Route::post('task',[TaskController::class,'store']);
Route::put('task/{id}', [TaskController::class, 'update']);
Route::patch('task/{id}/{conclude}', [TaskController::class, 'conclude']);
Route::delete('task/{id}', [TaskController::class, 'destroy']);
