<html>
    <head>
        <title>About Us</title>
    </head>
    <body>
        {{-- This is the About Us page --}}
        <h1>About Us</h1>
        <p>This is the About Us page.</p>
        <p>Name: {{ $name }}</p>
        <p>Email: {{ $email }}</p>

        @for($i = 0; $i < 5; $i++)
            <p>iteration: {{ $i }}</p>
        @endfor

        @if($name === 'Jhon-Deo')
            <p>Hello, Jhon-Deo!</p>
        @endif

        @auth
            <p>Welcome, {{ auth()->user()->name }}!</p>
        @endauth

        @include('SubViews.Input', ['name' => 'John Doe'])
    </body>
</html>