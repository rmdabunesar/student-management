@extends('layouts.app')

@section('title', 'Edit Students')

@section('content')
<section>
    <div>
        <div>
            <div>
                <h5>Edit Student</h5>
            </div>

            <div>
                <form action="{{ URL('students/update', $student->id) }}" method="POST">
                    @csrf

                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" required value="{{ $student->name }}">

                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required value="{{ $student->email }}">

                    <label for="age">Age</label>
                    <input type="number" id="age" name="age" required value="{{ $student->age }}">

                    <label for="date_of_birth">Date of Birth</label>
                    <input type="date" id="date_of_birth" name="date_of_birth" required value="{{ $student->date_of_birth }}">

                    <div>
                        <p>Gender</p>

                        <input type="radio" name="gender" id="male" value="male" {{ $student->gender == 'male' ? 'checked' : '' }}>
                        <label for="male">Male</label>

                        <input type="radio" name="gender" id="female" value="female" {{ $student->gender == 'female' ? 'checked' : '' }}>
                        <label for="female">Female</label>
                    </div>

                    <div>
                        <label for="score">Score</label>
                        <input type="number" id="score" name="score" required value="{{ $student->score }}">
                    </div>

                    <button type="submit">Update</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection