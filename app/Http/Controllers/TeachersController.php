<?php
namespace App\Http\Controllers;

use App\Models\Teachers;

class TeachersController extends Controller
{
    public function index()
    {
        return Teachers::all();
    }

    public function add()
    {
        $teacher        = new Teachers();
        $teacher->name  = 'John Doe';
        $teacher->email = 'john.doe@example.com';
        $teacher->save();

        return 'Teacher added successfully!';
    }

    public function show($id)
    {
        $item = Teachers::findOrFail($id);
        return $item;
    }

    public function update($id)
    {
        $teacher        = Teachers::findOrFail($id);
        $teacher->name  = 'Jane Doe';
        $teacher->email = 'jane.doe@example.com';
        $teacher->update();

        return 'Teacher updated successfully!';
    }

    public function delete($id)
    {
        $teacher = Teachers::findOrFail($id);
        $teacher->delete();

        return 'Teacher deleted successfully!';
    }
}
