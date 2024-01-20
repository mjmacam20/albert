<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function adding(Request $request)
    {
        $student = new Student();
        $student->name = $request->name;
        $student->age= $request->age;
        $student->address = $request->address;
        $student->course = $request->course;
        $student->subject = $request->subject;
        $student->save();

        return response()->json(['Successfully Added']);
    }

    public function edit(Request $request){
        $student = Student::findorfail($request->id);
        $student->name = $request->name;
        $student->age= $request->age;
        $student->address = $request->address;
        $student->course = $request->course;
        $student->subject = $request->subject;
        $student->update();

        return response()->json(['Successfully Updated']);
    }

    public function delete(Request $request){
        $student = Student::findorfail($request->id)->delete();

        return response()->json(['Successfully Deleted']);
    }

    public function view(Request $request){
        $student = Student::all();
        return response()->json($student);
    }

    //public function get(Request $request, $id)
    //{
    //    $student = Student::find($id);

    //        if (!$student) {
    //        return response()->json(['error' => 'Student not found'], 404);
    //        }

    //return response()->json($student);
    //   }
}
