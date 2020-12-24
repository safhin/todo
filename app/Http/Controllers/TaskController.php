<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class TaskController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index()
    {
        $tasks = Task::all();
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
        return redirect()->back();
    }
}
