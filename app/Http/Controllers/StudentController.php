<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    function show(){
        return "Student List are added!!";
    }
    function add(){
        return "Students are added!!";
    }
    function delete(){
        return "Students are deleted!!";
    }
    function about($name){
        return "Your Name is: ".$name;
    }
}
