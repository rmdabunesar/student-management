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

Route::get('add-data', [StudentController::class, 'addData']);
Route::get('get-data', [StudentController::class, 'getData']);
Route::get('where-condition', [StudentController::class, 'whereCondition']);
Route::get('update-data', [StudentController::class, 'updateData']);
Route::get('delete-data', [StudentController::class, 'deleteData']);
Route::get('query-scope', [StudentController::class, 'queryScope']);
Route::get('second-query', [StudentController::class, 'secondQuery']);