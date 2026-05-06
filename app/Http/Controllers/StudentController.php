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
        $validated = $request->validate([
            'name'          => 'required|string|max:255',
            'email'         => 'required|email|unique:students,email',
            'age'           => 'required|integer|min:1',
            'date_of_birth' => 'required|date',
            'gender'        => 'required|in:male,female',
            'score'         => 'required|numeric|min:0|max:100',
        ], [
            'name.required'          => 'Name is required.',
            'email.required'         => 'Email is required.',
            'email.email'            => 'Enter a valid email address.',
            'email.unique'           => 'This email is already taken.',
            'age.required'           => 'Age is required.',
            'age.integer'            => 'Age must be a number.',
            'date_of_birth.required' => 'Date of birth is required.',
            'gender.required'        => 'Gender is required.',
            'score.required'         => 'Score is required.',
            'score.numeric'          => 'Score must be a number.',
            'score.min'              => 'Score cannot be less than 0.',
            'score.max'              => 'Score cannot be more than 100.',
        ]);

        Student::create($validated);

        return redirect()->route('students.index');
    }

    public function edit($id)
    {
        $student = Student::findOrFail($id);

        return view('students.edit', compact('student'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name'          => 'required|string|max:255',
            'email'         => 'required|email|unique:students,email,' . $id,
            'age'           => 'required|integer|min:1',
            'date_of_birth' => 'required|date',
            'gender'        => 'required|in:male,female',
            'score'         => 'required|numeric|min:0|max:100',
        ], [
            'name.required'          => 'Name is required.',
            'email.required'         => 'Email is required.',
            'email.email'            => 'Enter a valid email address.',
            'email.unique'           => 'This email is already taken.',
            'age.required'           => 'Age is required.',
            'age.integer'            => 'Age must be a number.',
            'date_of_birth.required' => 'Date of birth is required.',
            'gender.required'        => 'Gender is required.',
            'score.required'         => 'Score is required.',
            'score.numeric'          => 'Score must be a number.',
            'score.min'              => 'Score cannot be less than 0.',
            'score.max'              => 'Score cannot be more than 100.',
        ]);

        $student = Student::findOrFail($id);
        $student->update($validated);

        return redirect()->route('students.index');
    }

    public function destroy($id)
    {
        $student = Student::findOrFail($id);
        $student->delete();

        return redirect('students');
    }
}
