<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/@picocss/pico@latest/css/pico.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>

    <main class="container">

        <nav>
            <ul>
                <li><strong>Student Management</strong></li>
            </ul>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/about-us">About</a></li>
                <li><a href="/contact-us">Contact</a></li>
                <li><a href="/students">Students</a></li>
            </ul>
        </nav>

        @yield('content')

        <footer>
            <small>&copy; 2026 My Website</small>
        </footer>

    </main>

    @stack('scripts')

</body>
</html>