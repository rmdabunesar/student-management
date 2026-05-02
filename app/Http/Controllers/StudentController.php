<?php
namespace App\Http\Controllers;

class StudentController extends Controller
{
    protected $name;
    protected $age;
    public function __construct()
    {
        $this->name = 'John Doe';
        $this->age = 20;
    }

    public function index()
    {
        $privateData = $this->privateMethod();
        return $privateData . ' ' . $this->name . ' ' . $this->age;
    }

    public function aboutUs($id, $name)
    {
        return view('aboutus', ['id' => $id, 'name' => $name]);
    }

    private function privateMethod()
    {
        return 'This is a private method.';
    }
}
