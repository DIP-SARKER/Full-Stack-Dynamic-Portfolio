<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skill;

class Skills_Controller extends Controller
{
    public function index(){
        $skills = Skill::all();
        return view('database.skill', ["skills"=>  $skills]);
        
    }

    public function create(){
        return view('database.createskill');
    }

    public function store(Request $request){
        $data = $request->validate([
        ]);

        $newSkill= Skill::create($data);
        return redirect()->route('skill.index')->with('success', 'Skill added successfully!');
    }

    public function edit(Skill $skill){
        return view('database.editskill', ["skill"=>  $skill]);
    }

    public function update(Skill $skill, Request $request){
        $data = $request->validate([
        ]);
        $skill->update($data);
        return redirect()->route('skill.index')->with('success', 'Skill info updated successfully!');
        
    }

    public function delete(Skill $skill){
        $skill->delete();
        return redirect()->route('skill.index')->with('success', 'Skill has been deleted successfully!');
    }
}
