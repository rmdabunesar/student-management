<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeachersController;
use Illuminate\Support\Facades\Route;
use App\Models\Teachers;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('teachers', [TeachersController::class, 'index']);
Route::get('add-teacher', [TeachersController::class, 'add']);
Route::get('show-teacher/{id}', [TeachersController::class, 'show']);
Route::get('update-teacher/{id}', [TeachersController::class, 'update']);
Route::get('delete-teacher/{id}', [TeachersController::class, 'delete']);