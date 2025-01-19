<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function create(Request $request){
        if ($request->isMethod("POST")){
            $validated = $request->validate([
                "title"=>"min:3|required",
                "description"=>"min:3|required",
                "project_id"=>"required",
            ]);
            Task::create($validated);
            return redirect()->route('project.index');
        }
        return view('task.create');
    }

    public function index(){
        $tasks = Task::all();
        return view('task.index',compact('tasks'));
    }

    public function destroy(Task $task){
        $task->delete();
        return redirect()->route('task.index');
    }

    public function update(Request $request,Task $task){
        if ($request->isMethod("PUT")){
            $validated = $request->validate([
                "title"=>"min:3|required",
                "description"=>"min:3|required",
                "project_id"=>"required",
            ]);
            Task::update($validated);
            return redirect()->route('task.index');
        }
        return view('task.update',compact('task'));
    }

}
