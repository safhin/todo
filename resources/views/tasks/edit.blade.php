@extends('layouts.app')

@section('content')
    <div class="flex justify-center mb-4 mt-4">
        <div class="w-4/12 bg-white p-4 rounded-lg">
            @if (session('status'))
                <div class="bg-red-500 w-full rounded-lg p-4 text-white text-center mb-2">
                    {{ session('status') }}
                </div>
            @endif
            <form action="{{ route('update', [ $task->id ]) }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="name" class="sr-only">Name</label>
                    <input type="text" name="name" id="name" class="w-full bg-gray-100 rounded-lg p-4 border-2" placeholder="Name" value="{{ $task->name }}">
                </div>
                <div class="mb-4">
                    <label for="description" class="sr-only">Name</label>
                    <textarea name="description" id="description" class="w-full bg-gray-100 rounded-lg p-4 border-2" placeholder="Description">{{ $task->description }}</textarea>
                </div>
                <div class="mb-4">
                    <label for="dedline" class="sr-only">Dedline</label>
                    <input type="datetime-local" name="dedline" id="dedline" class="w-full bg-gray-100 rounded-lg p-4 border-2" placeholder="Dedline" value="{{ ($task->dedline) }}">
                </div>
                <div class="mb-4">
                    <button type="submit" class="w-full p-4 bg-blue-500 text-white rounded-lg focus:outline-none">Update task</button>
                </div>
            </form>
        </div>
    </div>
@endsection