<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
    <nav>
        <ul style="display: flex;list-style: none;gap: 40px">
            <li><a href="/home">Home</a></li>
            <li><a href="/about/sandeep">About</a></li>
            <li><a href="/directives">Directives</a></li>
            <li><a href="/register">Register</a></li>
            <li><a href="{{route('products.view')}}">products</a></li>
        </ul>
    </nav>
    {{-- @if (session()->has('user-name'))
    {{session()->get('user-name')}}
    @else
     Guest
    @endif --}}
    <div style="margin: 40px">
        @yield('content')
    </div>
    <footer style="padding: 5px 40px; background-color: gray;">
        <h3>
            This is a footer
        </h3>
    </footer>
</body>
</html>