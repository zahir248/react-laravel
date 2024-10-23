<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\API\StudentController;

Route::post('add-student', [StudentController::class, 'store']);

Route::get('students', [StudentController::class, 'index']);

Route::get('edit-student/{id}', [StudentController::class, 'edit'] );

Route::put('update-student/{id}', [StudentController::class, 'update'] );

Route::delete('delete-student/{id}', [StudentController::class, 'delete']);