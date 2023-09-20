<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>{{$Title}}</title>
    {{-- <link rel="stylesheet" href="css/style.css"> --}}
</head>
<body>
    @include('partials.Navbar')
    <div class="w-screen h-screen flex flex-col justify-center items-center">
    @yield('container')
    </div>
    {{-- <script src="js/script.js"></script> --}}
</body>
</html>