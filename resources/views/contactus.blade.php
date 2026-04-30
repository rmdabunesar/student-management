<html>
    <head>
        <title>Contact Us</title>
    </head>
    <body>
        <h1>Contact Us</h1>
        <p>This is the Contact Us page.</p>
        <p>Name: {{ request()->name }}</p>
        <p>Email: {{ request()->email }}</p>


        @include('SubViews.Input', ['name'=> request()->name])
    </body>
</html>