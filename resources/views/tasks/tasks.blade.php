@extends('layouts.app')

@section('content')
    <div class="flex justify-center mb-2" style="background-image:url({{asset('images/bg.svg')}});">
        <div class="w-6/12 rounded-lg p-4">
            @if (count($tasks) <= 0)
                <h2 class="text-center">You dont have any tasks. <a href="{{ route('create') }}">Create one?</a></h2>
            @else
                <!-- component -->
            <!-- This is an example component -->
            <div class="pt-15 w-full">
                <div class="grid gap-6 mb-6">
                    @foreach ($tasks as $task)
                        <div class="min-w-0 p-4 text-white bg-indigo-500 rounded-lg shadow-xs">
                            <h4 class="mb-1 font-bold text-xl">{{ $task->name }}</h4>
                            <p>{{ $task->description }}</p>
                            <strong class="text-red-300">Dedline: {{ $task->dedline }}</strong>
                        </div>
                    @endforeach
                </div>
                <div class="mb-2 flex justify-end">
                    <a class="bg-indigo-500 p-4 text-white rounded-lg font-semibold" href="{{ route('create') }}">Create task</a>
                </div>
            </div>
            @endif
        </div>
    </div>
@endsection
