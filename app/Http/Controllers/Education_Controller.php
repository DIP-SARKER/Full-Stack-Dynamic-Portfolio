<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Education;

class Education_Controller extends Controller
{
    public function index(){
        $educations = Education::all();
        return view('database.education', ["educations"=>  $educations]);
        
    }

    public function create(){
        return view('database.createeducation');
    }

    public function store(Request $request){
        $data = $request->validate([
        ]);

        $newEducation= Education::create($data);
        return redirect()->route('education.index')->with('success', 'education added successfully!');
    }

    public function edit(Education $education){
        return view('database.editeducation', ["education"=>  $education]);
    }

    public function update(Education $education, Request $request){
        $data = $request->validate([
        ]);
        $education->update($data);
        return redirect()->route('education.index')->with('success', 'education info updated successfully!');
        
    }

    public function delete(Education $education){
        $education->delete();
        return redirect()->route('education.index')->with('success', 'education has been deleted successfully!');
    }
}
