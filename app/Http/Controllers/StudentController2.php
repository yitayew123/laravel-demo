<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
class StudentController2 extends Controller
{
    //
    function getstudent() {
        // Fetch all student records from the Student model using Eloquent ORM
        $students = \App\Models\Student::all();
    
        // Create a new instance of the Student model
        $data = new \App\Models\Student;
    
        // Call the 'TestFunction' method from the Student model and output its result
        // echo $data->TestFunction();
    
        // Return the 'students' view, passing the fetched student data as a parameter
        return view('students', ['data' => $students]);
    }
}

