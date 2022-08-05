<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function all(Request $request){
        $students = Student::simplePaginate(10);
        return view("students.student-list", [
            'students'=>$students,
        ]);
    }
    public function form(){
        return view("students.formstudent");
    }
    public function create(Request $request){
        Student::create(
            [
                "sid"=>$request->get("sid"),
                "name"=>$request->get("name"),
                "birthday"=>$request->get("birthday"),
                "cid"=>$request->get("cid")
            ]
        );
    }
}
