<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personal_detail;

class Personal_detail_Controller extends Controller
{
    public function index(){
        $p_detail = Personal_detail::all();
        return view('database.personal_details', ["p_details"=>  $p_detail]);
        
    }

    public function create(){
        return view('database.create_personal_details');
    }

    public function store(Request $request){
        $data = $request->validate([
            // 'name' => 'required | max:20',
            // 'email'  => 'required | max:100 | regex:/^.+@.+$/i',
            // 'phone'  => 'required | max:20',
            // 'avatar'  => 'nullable | active_url',
            // 'student_id'  => 'required | max:30',
        ]);

        $newUser = Personal_detail::create($data);
        return redirect()->route('personal_detail.index')->with('success', 'Details added successfully!');
    }

    public function edit(Personal_detail $p_detail){
        return view('database.edit_personal_details', ["p_detail"=>  $p_detail]);
    }

    public function update(Personal_detail $p_detail, Request $request){
        $data = $request->validate([
            'name' => 'required | max:20',
            'email'  => 'required | max:100 | regex:/^.+@.+$/i',
            'phone'  => 'required | max:20',
            'avatar'  => 'nullable | active_url',
            'student_id'  => 'required | max:30',
        ]);
        $user->update($data);
        return redirect()->route('personal_detail.index')->with('success', 'Details updated successfully!');
        
    }

    public function delete(Personal_detail $p_detail){
        $p_detail->delete();
        return redirect()->route('personal_detail.index')->with('success', 'Details has been deleted successfully!');
    }
}
