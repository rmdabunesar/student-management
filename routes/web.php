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

Route::get('/', function () {
    return view('welcome');
});

Route::get('about-us/{name}/{email}', function ($name, $email) {
    // $name  = 'John Doe';
    // $email = 'john.doe@example.com';
    // return view('aboutus', compact('name', 'email'));
    // return view('aboutus')->with('name', $name)->with('email', $email);
    return view('aboutus', ['name' => $name, 'email' => $email]);

});

Route::view('contact-us/{name}/{email}', 'contactus');
