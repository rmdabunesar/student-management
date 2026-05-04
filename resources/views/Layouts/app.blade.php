<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>

<header>
    <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/about-us">About</a></li>
        <li><a href="/contact-us">Contact</a></li>
        <li><a href="/students">Students</a></li>
    </ul>
</header>

<div class="container">
    @yield('content')
</div>

<footer>
    <p>&copy; 2026 My Website</p>
</footer>

@stack('scripts')

</body>
</html>