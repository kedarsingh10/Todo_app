@extends('layout.app')

@section('content')

<div class="flex justify-center">
    <div class="w-4/12 bg-white p-6 rounded-lg">
        <h1 class="mb-4">
            Create Task
        </h1>

        <form action="{{ route('task.store') }}" method="POST">
            @csrf

            <div class="mb-4">
                <label for="title" class="sr-only">Title</label>
                <input type="text" id="title" name="title" placeholder="Title" class="w-full bg-gray-100 p-2 rounded-lg border-2 @error('Title') border-red-500  @enderror" value="{{ old('title') }}">
                
                @error('title')
                    <div class="mt-2 text-red-500 text-sm">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="description" class="sr-only">description</label>
                <input type="text" id="description" name="description" placeholder="description" class="w-full bg-gray-100 p-2 rounded-lg border-2 @error('description') border-red-500  @enderror" value="{{ old('description') }}">
                
                @error('description')
                    <div class="mt-2 text-red-500 text-sm">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-4">
                <button type="submit" class="w-full rounded bg-blue-500 text-white font-medium p-3">Create Task</button>
            </div>

        </form>
    </div>
</div>
@endsection