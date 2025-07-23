<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Achievement;

class Achievement_Controller extends Controller
{
    public function index(){
        $achievements = Achievement::all();
        return view('database.achievements', ["achievements" => $achievements]);
    }

    public function create(){
        return view('database.createachievement');
    }

    public function store(Request $request){
        $data = $request->validate([
            'user_id' => 'required|exists:users,id',
            'name' => 'required|max:100',
            'type' => 'required|max:50',
            'certification' => 'nullable|url',
            'organization' => 'required|max:100',
            'date' => 'required|date',
            'category' => 'required|max:50',
            'images' => 'nullable|json',
        ]);

        Achievement::create($data);
        return redirect()->route('achievement.index')->with('success', 'Achievement added successfully!');
    }

    public function edit(Achievement $achievement){
        return view('database.editachievement', ["achievement" => $achievement]);
    }

    public function update(Achievement $achievement, Request $request){
        $data = $request->validate([
            'user_id' => 'required|exists:users,id',
            'name' => 'required|max:100',
            'type' => 'required|max:50',
            'certification' => 'nullable|url',
            'organization' => 'required|max:100',
            'date' => 'required|date',
            'category' => 'required|max:50',
            'images' => 'nullable|json',
        ]);

        $achievement->update($data);
        return redirect()->route('achievement.index')->with('success', 'Achievement updated successfully!');
    }

    public function delete(Achievement $achievement){
        $achievement->delete();
        return redirect()->route('achievement.index')->with('success', 'Achievement deleted successfully!');
    }
}
