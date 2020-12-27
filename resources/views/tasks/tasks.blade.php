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
                <div class="w-full justify-between flex items-center bg-indigo-500 p-4 text-white rounded mb-6">
                    <div class="font-semibold">
                        <h2>Dashboard</h2>
                    </div>
                    <div class="">
                        <a class="font-semibold" href="{{ route('create') }}">Create task +</a>
                    </div>
                </div>
                <div class="grid gap-3">
                    @foreach ($tasks as $task)
                        <div class="min-w-0 p-4 text-white bg-indigo-500 rounded-lg shadow-xs">
                            <h4 class="mb-1 font-bold text-xl">{{ $task->name }}</h4>
                            <p>{{ $task->description }}</p>
                            <strong class="text-red-300">Dedline: {{ $task->dedline }}</strong>
                            <div class="flex justify-end">
                                <div class="flex mr-2">
                                    <a href="{{ route('edit',['id' => $task->id ]) }}" class="bg-green-500 px-4 py-2 rounded-lg font-semibold">Edit</a>
                                </div>
                                <div class="flex">
                                    <form action="{{ route('delete',['id' => $task->id]) }}" method="POST">
                                        @csrf
                                        <button type="submit" class="bg-red-600 px-4 py-2 rounded-lg font-semibold">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            @endif
        </div>
    </div>
@endsection
