@extends('layouts.app')

@section('content')
<div class="flex justify-center">
    <div class="w-4/12 bg-white p-4 rounded-lg">
        @if (session('status'))
            <div class="bg-red-500 w-full rounded-lg p-4 text-white text-center mb-2">
                {{ session('status') }}
            </div>
        @endif
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="email" class="sr-only">Name</label>
                <input type="text" name="email" id="email" class="w-full bg-gray-100 rounded-lg p-4 border-2 @error('email') border-red-500 @enderror" placeholder="Email"  value="{{ old('email') }}">
                @error('email')
                    <div class="text-red-500 mt-2">
                        {{  $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="password" class="sr-only">Name</label>
                <input type="password" name="password" id="password" class="w-full bg-gray-100 rounded-lg p-4 border-2 @error('password') border-red-500 @enderror" placeholder="Password">
                @error('password')
                    <div class="text-red-500 mt-2">
                        {{  $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-4">
                <button type="submit" class="w-full bg-blue-500 p-4 text-white rounded-lg focus:outline-none">Login</button>
            </div>
        </form>
    </div>
</div>
@endsection