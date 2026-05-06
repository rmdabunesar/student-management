@extends('layouts.app')

@section('title', 'Students')

@section('content')
    <h2>Students</h2>

    <form action="{{ url('students') }}" method="GET">
        <input type="text" name="search" placeholder="Search students...">
        <button type="submit">Search</button>
        <a href="{{ url('/students/add') }}" role="button">Add Student</a>
    </form>

    <figure>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Age</th>
                    <th>Date of Birth</th>
                    <th>Gender</th>
                    <th>Score</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($students as $student)
                <tr>
                    <td>{{ $student->id }}</td>    
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->email }}</td>
                    <td>{{ $student->age }}</td>
                    <td>{{ $student->date_of_birth }}</td>
                    <td>{{ $student->gender }}</td>
                    <td>{{ $student->score }}</td>
                    <td>
                        <a href="{{ URL('students/edit', $student->id) }}">Edit</a>
                        
                        <form action="{{ URL('students/delete', $student->id) }}" method="post" onsubmit="return confirm('Are you sure you want to delete?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </figure>

    <nav>
        {{ $students
            ->appends(request()->query())
            ->links('pagination::bootstrap-5') }}
    </nav>

@endsection