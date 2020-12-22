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
                <label for="name" class="sr-only">Name</label>
                <input type="text" name="name" id="name" class="w-full bg-gray-100 rounded-lg p-4 border-2 @error('name') border-red-500 @enderror" placeholder="Email"  value="{{ old('name') }}">
                @error('name')
                    <div class="text-red-500 mt-2">
                        {{  $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="description" class="sr-only">Name</label>
                <textarea type="description" name="description" id="description" class="w-full bg-gray-100 rounded-lg p-4 border-2 @error('description') border-red-500 @enderror" placeholder="description">
                    {{ old('description') }}
                </textarea>
                @error('description')
                    <div class="text-red-500 mt-2">
                        {{  $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="dedline" class="sr-only"></label>
                <input type="datetime-local" name="dedline" id="dedline" class="w-full bg-gray-100 rounded-lg p-4 border-2 @error('dedline') border-red-500 @enderror" placeholder="Dedline">
                @error('dedline')
                    <div class="text-red-500 mt-2">
                        {{  $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-4">
                <button type="submit" class="w-full p-4 bg-blue-500 text-white rounded-lg">Create task</button>
            </div>
        </form>
    </div>
</div>
@endsection