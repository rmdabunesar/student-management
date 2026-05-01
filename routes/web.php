<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

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

Route::view('about-us', 'aboutus');

Route::view('contact-us', 'contactus');

Route::controller(StudentController::class)->group(function () {
    Route::get('students', 'index');
    Route::get('students/{id}/{name}', 'aboutUs');
});
