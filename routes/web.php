<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return 'hello world';
});

Route::get('about', function () {
    return 'About Us';
});

Route::get('contact', function () {
    return 'Contact Us';
});

// Route::get('details/student', function () {
//     return 'Student Details';
// });

// Route::get('details/teacher', function () {
//     return 'Teacher Details';
// });


Route::prefix('details')->group(function () {
    Route::get('student', function () {
        return 'Student Details';
    })->name('student.details');

    Route::get('teacher', function () {
        return 'Teacher Details';
    })->name('teacher.details');
});


