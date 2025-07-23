<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class Project_Controller extends Controller
{
    public function index(){
        $projects = Project::all();
        return view('database.projects', ["projects"=>  $projects]);
        
    }

    public function create(){
        return view('database.createproject');
    }

    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required | max:20',
            'email'  => 'required | max:100 | regex:/^.+@.+$/i',
            'phone'  => 'required | max:20',
            'avatar'  => 'active_url',
            'student_id'  => 'required | max:30',
        ]);

        $newProject = Project::create($data);
        return redirect()->route('project.index')->with('success', 'project added successfully!');
    }

    public function edit(Project $project){
        return view('database.editproject', ["project"=>  $project]);
    }

    public function update(Project $project, Request $request){
        $data = $request->validate([
            'name' => 'required | max:20',
            'email'  => 'required | max:100 | regex:/^.+@.+$/i',
            'phone'  => 'required | max:20',
            'avatar'  => 'active_url',
            'student_id'  => 'required | max:30',
        ]);
        $project->update($data);
        return redirect()->route('project.index')->with('success', 'project info updated successfully!');
        
    }

    public function delete(Project $project){
        $project->delete();
        return redirect()->route('project.index')->with('success', 'project has been deleted successfully!');
    }
}
