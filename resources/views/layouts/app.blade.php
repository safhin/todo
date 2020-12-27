<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="leading-normal tracking-normal text-gray-900" style="font-family: 'Source Sans Pro', sans-serif;">
    <!--Nav-->
    <div class="w-full container mx-auto p-6">
        
      <div class="w-full flex items-center justify-between">
        <div class="flex items-center">
          <a class="flex items-center text-indigo-400 no-underline hover:no-underline font-bold text-xl lg:text-2xl mr-3"  href="{{ route('home') }}"> 
            <svg class="h-8 fill-current text-indigo-600 pr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 20a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm-5.6-4.29a9.95 9.95 0 0 1 11.2 0 8 8 0 1 0-11.2 0zm6.12-7.64l3.02-3.02 1.41 1.41-3.02 3.02a2 2 0 1 1-1.41-1.41z"/></svg> Todo App
          </a>
          <a class="flex items-center text-indigo-400 no-underline hover:no-underline font-bold text-xl lg:text-2xl"  href="{{ route('tasks') }}"> 
            Tasks
          </a>
        </div>
        <div class="flex w-1/2 justify-end content-center">
          @auth
            <p class="inline-block text-blue-300 no-underline hover:text-indigo-800 hover:text-underline text-center h-10 p-2 md:h-auto md:p-4">{{ auth()->user()->name }}</p>
            <a class="inline-block text-blue-300 no-underline hover:text-indigo-800 hover:text-underline text-center h-10 p-2 md:h-auto md:p-4" href="{{route('logout')}}">Logout</a>
          @endauth
          @guest
            <a class="inline-block text-blue-300 no-underline hover:text-indigo-800 hover:text-underline text-center h-10 p-2 md:h-auto md:p-4" href="{{route('register')}}">Registration</a>
            <a class="inline-block text-blue-300 no-underline hover:text-indigo-800 hover:text-underline text-center h-10 p-2 md:h-auto md:p-4" href="{{route('login')}}">Login</a>
          @endguest
        </div>
        
      </div>

    </div>
    <div id="app">
      @yield('content')
    </div>
</body>
</html>