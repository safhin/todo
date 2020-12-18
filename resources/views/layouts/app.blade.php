<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="bg-gray-100">
    <nav class="bg-white p-8 flex justify-between mb-4">
        <ul class="flex items-center">
            <li class="pr-3"><a href="{{ route('home') }}">Home</a></li>
            <li><a href="#">Tasks</a></li>
        </ul>
        <ul class="flex items-center">
            <li class="pr-3"><a href="{{ route('register') }}">Register</a></li>
            <li class="pr-3"><a href="#">Login</a></li>
            <li><a href="#">Logout</a></li>
        </ul>
    </nav>
    <div id="app">
        @yield('content')
    </div>
</body>
</html>