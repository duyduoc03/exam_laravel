<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function all(){
        $students = Student::simplePaginate(10);
        return view("student-list", [
            'students'=>$students,
        ]);
    }
    public function form(){
        return view("formstudent");
    }
    public function create(Request $request){
        Student::create(
            [
                "name"=>$request->get("name"),
                "age"=>$request->get("age"),
                "address"=>$request->get("address"),
                "telephone"=>$request->get("telephone")
            ]
        );
        return redirect()->to("/list");
    }
}
