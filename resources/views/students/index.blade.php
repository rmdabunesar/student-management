@extends('layouts.app')

@section('title', 'Students')

@section('content')

<div class="sidebar">
    <h2>Sidebar</h2>
    <ul>
        <li>Our Story</li>
        <li>Mission</li>
        <li>Vision</li>
    </ul>
</div>

<div class="content">
    <h2>Students</h2>

    <form action="{{ URL('students') }}" method="GET">
        <input type="text" name="search" id="search" placeholder="Search students...">
        <button type="submit">Search</button>
    </form>

    <div class="table-wrapper">
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
                            <a href="#" class="action-btn edit-btn">Edit</a>
                            <a href="#" class="action-btn delete-btn">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="pagination">
            {{ $students
            ->appends(request()->query())
            ->links('pagination::bootstrap-5') }}
        </div>

    </div>
</div>

@endsection

@push('scripts')
<script>
    console.log('Students page loaded');
</script>
@endpush