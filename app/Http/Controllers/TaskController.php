<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index()
    {
        $user_id = Auth::id();
        $tasks = Task::all()->where('user_id', $user_id);
        return view('tasks.tasks', [
            'tasks' => $tasks
        ]);
    }
    public function create()
    {
        return view('tasks.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|max:255',
            'description' => 'nullable|string',
            'dedline' => 'required|after:today'
        ]);
        $user_id = Auth::id();
        $dedline = (new \DateTime($request['dedline']))->format('Y-m-d h:i:s');
        $tasks = Task::create([
            'name' => $request['name'],
            'description' =>  $request['description'],
            'dedline' =>  $dedline,
            'user_id' => $user_id,
        ]);
        return redirect()->route('tasks');
    }

    public function edit($id)
    {
        $task = Task::findOrFail($id);
        return view('tasks.edit',['task' => $task]);
    }
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name' => 'required|max:255',
            'description' => 'nullable|string',
            'dedline' => 'required|after:today'
        ]);
        $task_id = Task::findOrFail($id);
        $dedline = (new \DateTime($request['dedline']))->format('Y-m-d h:i:s');
        DB::table('tasks')
        ->where('id', $task_id->id)
        ->update([
            'name' => $request['name'],
            'description' => $request['description'],
            'dedline' => $dedline,
        ]);

        return redirect()->route('tasks');
    }

    public function delete($id)
    {
        $task = Task::findOrFail($id);
        // $this->authorize('delete', $task);
        $task->delete();
        return back();
    }
}
