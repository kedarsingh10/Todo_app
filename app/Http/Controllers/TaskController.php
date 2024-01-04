<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function __contruct(){
        $this->middleware('auth');
    }

    public function index(){
        $tasks = Task::with('user')->latest()->paginate(10);
        
        return view('home', compact('tasks'));
    }

    public function create(){
        return view('tasks.create');
    }

    public function store(Request $request){
        
        $this->validate($request, [
            'title' => 'required|max: 255',
            'description' => 'required|max: 255',
        ]);

        $request->user()->tasks()->create($request->only('title', 'description'));
        return redirect()->route('todo');
    }

    public function update(Task $task)
    {
        $task->completed = !$task->completed;
        $task->save();
        return redirect()->back();
    }

    public function destroy(Task $task){
        $task->delete();
        return redirect()->back();
    }

}
