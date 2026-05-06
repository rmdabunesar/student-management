<?php
namespace App\Http\Controllers;

use App\Http\Requests\StudentAddRequest;
use App\Http\Requests\StudentUpdateRequest;
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
            ->orderBy('id', 'desc')
            ->paginate(10)
            ->withQueryString();

        return view('students.index', compact('students', 'search'));
    }

    public function create(StudentAddRequest $request)
    {
        $student                = new Student();
        $student->name          = $request->name;
        $student->email         = $request->email;
        $student->age           = $request->age;
        $student->date_of_birth = $request->date_of_birth;
        $student->gender        = $request->gender;
        $student->score         = $request->score;
        $student->image         = $request->hasFile('image') ? $request->file('image')->store('photos', 'public') : null;
        $student->save();

        return redirect('students');
    }

    public function edit($id)
    {
        $student = Student::findOrFail($id);

        return view('students.edit', compact('student'));
    }

    public function update(StudentUpdateRequest $request, $id)
    {
        $student = Student::findOrFail($id);
        
        $student->name          = $request->name;
        $student->email         = $request->email;
        $student->age           = $request->age;
        $student->date_of_birth = $request->date_of_birth;
        $student->gender        = $request->gender;
        $student->score         = $request->score;
        $student->update();

        return redirect('students');
    }

    public function destroy($id)
    {
        $student = Student::findOrFail($id);
        $student->delete();

        return redirect('students');
    }
}
