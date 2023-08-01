<!DOCTYPE html>
<html>
<head>
    <title>Laravel ToDo App</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="{{ route('todo') }}">ToDo App</a></li>
            <li><a href="{{ route('about_me') }}">Your Wish Page</a></li>
        </ul>
    </nav>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>
