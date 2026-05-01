<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        return '<h1>Student Index</h1>';
    }

    public function aboutUs($id, $name)
    {
        return view('aboutus', ['id' => $id, 'name' => $name]);
    }
}
