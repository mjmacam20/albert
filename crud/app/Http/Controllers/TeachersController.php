<?php

namespace App\Http\Controllers;

use App\Models\teachers;
use Illuminate\Http\Request;

class TeachersController extends Controller
{
    public function adding(Request $request)
    {
        $teachers = new Teachers();
        $teachers->name = $request->name;
        $teachers->age= $request->age;
        $teachers->address = $request->address;
        $teachers->department = $request->department;
        $teachers->save();

        return response()->json(['Successfully Added']);
    }

    public function edit(Request $request)
    {
        $teachers = Teachers::findorfail($request->id);
        $teachers->name = $request->name;
        $teachers->age= $request->age;
        $teachers->address = $request->address;
        $teachers->department = $request->department;
        $teachers->save();

        return response()->json(['Successfully Updated']);
    }

    public function delete(Request $request){
        $teachers = Teachers::findorfail($request->id)->delete();

        return response()->json(['Successfully Deleted']);
    }

    public function view(Request $request){
        $teachers = Teachers::all();
        return response()->json($teachers);
    }
}
