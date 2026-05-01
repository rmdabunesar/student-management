<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

<header>
    <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/about">About</a></li>
        <li><a href="/contact">Contact</a></li>
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