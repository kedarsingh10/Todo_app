@extends('layout.app')

@section('content')

    <div class="flex justify-center">
        <div class="bg-white w-8/12 rounded-lg p-6 ">
            @guest
                
               Login to check Tasks!

            @endguest

            @auth
                @if ($tasks->count() > 0)

                @foreach ($tasks as $task)
                    <div class="px-4 py-2 border rounded border-gray-200 bg-white hover:bg-gray-100 {{ $task->completed ? 'line-through bg-gray-100 text-gray-500' : '' }}">
                        <div class="flex flex-row items-center justify-between"> <div class="flex-grow"> {{ $task->title }}
                            </div>
                            <div class="flex items-center"> <form action="{{ route('tasks.update', $task->id) }}" method="post">
                                    @csrf
                                    @method('put')
                                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                        @if ($task->completed) Mark Incomplete @else Mark Complete @endif
                                    </button>
                                </form>
                                <form action="{{ route('task.destroy', $task) }}" method="POST" class="ml-4"> @csrf
                                    @method('delete')
                                    <button type="submit" class="text-red-600 font-medium">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach


                <div class="mt-4">
                    
                    {{ $tasks->links() }}
                </div>

                @else
                    <p class="p-2">
                        No task found!
                    </p>
                @endif
            @endauth

        </div>
    </div>

@endsection