<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\task;

class TaskController extends Controller
{
    public function index() {
        $tasks = Task::all();
        return view("posts", ['tasks'=>$tasks]);
    }
    public function store(Request $request) {
        $data = $request->validate([
            'title'=>['required','string'],
        ]);
        $task = Task::create($data);
        return redirect()->route('index');
    }
    public function delete($id) {
        $task = Task::find($id);
        $task->delete();
        return redirect()->route('index');
     }

}
