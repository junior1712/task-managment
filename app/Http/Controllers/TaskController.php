<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::where('user_id', Auth::id())->paginate(3);
        return view('tasks.index', compact('tasks'));
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'due_date' => 'required|date',
            'status' => 'required|in:pending,in-progress,completed',
        ]);

        Task::create([
            'user_id' => Auth::id(),
            'title' => $request->title,
            'description' => $request->description,
            'due_date' => $request->due_date,
            'status' => $request->status,
        ]);

        return redirect()->route('tasks.index');
    }

    public function edit(Task $task)
    {
        $this->authorize('update', $task);
        return view('tasks.edit', compact('task'));
    }

    public function update(Request $request, Task $task)
    {
        $this->authorize('update', $task);

        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'due_date' => 'required|date',
            'status' => 'required|in:pending,in-progress,completed',
        ]);

        $task->update($request->all());

        return redirect()->route('tasks.index');
    }

    public function destroy(Task $task)
    {
        $this->authorize('delete', $task);
        $task->delete();

        return redirect()->route('tasks.index');
    }
}
