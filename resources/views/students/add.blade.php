@extends('layouts.app')

@section('title', 'Add Students')

@section('content')

    <section>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div>
            <h5>Student Registration</h5>
        </div>

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

            <div>
                <p>Gender</p>

                <input type="radio" name="gender" value="male" {{ old('gender') == 'male' ? 'checked' : '' }}>
                <label for="male">Male</label>

                <input type="radio" name="gender" value="female" {{ old('gender') == 'female' ? 'checked' : '' }}>
                <label for="female">Female</label>
            </div>

            <label for="score">Score</label>
            <input type="number" id="score" name="score" value="{{ old('score') }}">

            <label for="image">Image</label>
            <input type="file" id="image" name="image" accept="image/*">

            <button type="submit">Submit</button>
        </form>
    </section>

@endsection