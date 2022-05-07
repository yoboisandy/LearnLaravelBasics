<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
            <li><a href="{{route('upload-page')}}">File Upload</a></li>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>