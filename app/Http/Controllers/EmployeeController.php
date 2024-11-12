<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\employee;
class EmployeeController extends Controller
{
    //
    function Add_Employee(Request $request){
        $employee = new employee();
        $employee->name=$request->name;
        $employee->email=$request->email;
        $employee->phone=$request->phone;
        $result = $employee->save();
        if($request){
            return "Employee is added";
        }
        else{
            return "Employee is not added";
        }
    }
}
