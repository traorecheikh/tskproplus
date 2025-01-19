<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function create(Request $request)
    {
        if($request->isMethod("POST")){
            $validated = $request->validate([
                "name"=>"unique:App\Models\Project|min:3",
                "description"=>"min:10|required",
                "dueDate"=>"date|required",
                "user_id"=>"required",
            ]);

            Project::create($validated);
            return redirect()->route("user.home");
        }
        return view("project.create");
    }

    public function u(Request $request)
    {
        if($request->isMethod("POST")){
            $validated = $request->validate([
                "name"=>"unique:App\Models\Project|min:3",
                "description"=>"min:10|required",
                "dueDate"=>"date|required",
                "user_id"=>"required",
            ]);

            Project::create($validated);
            return redirect()->route("user.home");
        }
        return view("project.create");
    }

    public function index()
    {
        $projects = Project::all();
        return view("project.index",compact("projects"));
    }

    public function show($id)
    {
        $project = Project::find($id);
        return view("project.index",compact("project"));
    }

    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route("project.index");
    }
}
