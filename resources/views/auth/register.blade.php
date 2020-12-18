@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-4/12 bg-white p-4 rounded-lg">
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="name" class="sr-only">Name</label>
                    <input type="text" name="name" id="name" class="w-full bg-gray-100 rounded-lg p-4 border-2 @error('name') border-red-500 @enderror" placeholder="Name" value="{{ old('name') }}">
                    @error('name')
                        <div class="text-red-500 mt-2">
                            {{  $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="username" class="sr-only">User Name</label>
                    <input type="text" name="username" id="username" class="w-full bg-gray-100 rounded-lg p-4 border-2 @error('username') border-red-500 @enderror" placeholder="User name"  value="{{ old('username') }}">
                    @error('username')
                        <div class="text-red-500 mt-2">
                            {{  $message }}
                        </div>
                    @enderror
                </div>
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
                    <label for="password_confirmation" class="sr-only">Name</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" class="w-full bg-gray-100 rounded-lg p-4 border-2" placeholder="Confirm Password">
                </div>
                <div class="mb-4">
                    <button type="submit" class="w-full bg-blue-500 p-4 text-white rounded-lg focus:outline-none">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection