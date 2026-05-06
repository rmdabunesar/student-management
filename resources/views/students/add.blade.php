@extends('layouts.app')

@section('title', 'Add Students')

@section('content')

    <section>
        <header>
            <h3>Student Registration</h3>
        </header>

        <form action="{{ url('students/create') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <label for="name">Name</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}">

            <label for="email">Email</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}">

            <label for="age">Age</label>
            <input type="number" id="age" name="age" value="{{ old('age') }}">

            <label for="date_of_birth">Date of Birth</label>
            <input type="date" id="date_of_birth" name="date_of_birth" value="{{ old('date_of_birth') }}">

            <fieldset>
                <legend>Gender</legend>

                <label>
                    <input type="radio" name="gender" value="male" {{ old('gender') == 'male' ? 'checked' : '' }}>
                    Male
                </label>

                <label>
                    <input type="radio" name="gender" value="female" {{ old('gender') == 'female' ? 'checked' : '' }}>
                    Female
                </label>
            </fieldset>

            <label for="score">Score</label>
            <input type="number" id="score" name="score" value="{{ old('score') }}">

            <button type="submit">Submit</button>
        </form>
    </section>

@endsection