<?php
namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(Request $request)
    {
        $search = trim($request->get('search'));

        $students = Student::query()
            ->when($search, function ($query) use ($search) {
                $query->where(function ($q) use ($search) {
                    $q->where('name', 'like', "%{$search}%")
                        ->orWhere('email', 'like', "%{$search}%")
                        ->orWhere('gender', $search);

                    if (is_numeric($search)) {
                        $q->orWhere('age', $search)
                            ->orWhere('score', $search);
                    }
                });
            })
            ->orderBy('id', 'asc')
            ->paginate(10)
            ->withQueryString();

        return view('students.index', compact('students', 'search'));
    }

    public function create(Request $request)
    {
        $student                = new Student();
        $student->name          = $request->name;
        $student->email         = $request->email;
        $student->age           = $request->age;
        $student->date_of_birth = $request->date_of_birth;
        $student->gender        = $request->gender;
        $student->score         = $request->score;
        $student->save();

        return redirect('students');
    }

}
