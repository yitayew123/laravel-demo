<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
class StudentController2 extends Controller
{
    //
    function getstudent(){
        $students = \App\Models\Student::all();
        $data = new \App\Models\Student;
        echo $data->TestFunction();
        return view('students',['data'=>$students]);
    }
}

