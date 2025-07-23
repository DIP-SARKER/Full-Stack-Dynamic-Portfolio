<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Experience;

class Experience_Controller extends Controller
{
    public function index(){
        $experiences = Experience::all();
        return view('database.experiences', ["experiences" => $experiences]);
    }

    public function create(){
        return view('database.createexperience');
    }

    public function store(Request $request){
        $data = $request->validate([
            'user_id' => 'required|exists:users,id',
            'type' => 'required|max:50',
            'designation' => 'required|max:100',
            'organization' => 'required|max:100',
            'from_date' => 'required|date',
            'to_date' => 'nullable|date|after_or_equal:from_date',
        ]);

        Experience::create($data);
        return redirect()->route('experience.index')->with('success', 'Experience added successfully!');
    }

    public function edit(Experience $experience){
        return view('database.editexperience', ["experience" => $experience]);
    }

    public function update(Experience $experience, Request $request){
        $data = $request->validate([
            'user_id' => 'required|exists:users,id',
            'type' => 'required|max:50',
            'designation' => 'required|max:100',
            'organization' => 'required|max:100',
            'from_date' => 'required|date',
            'to_date' => 'nullable|date|after_or_equal:from_date',
        ]);

        $experience->update($data);
        return redirect()->route('experience.index')->with('success', 'Experience updated successfully!');
    }

    public function delete(Experience $experience){
        $experience->delete();
        return redirect()->route('experience.index')->with('success', 'Experience deleted successfully!');
    }
}
