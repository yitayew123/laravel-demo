<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\EmployeeAPI;

class ApiController extends Controller
{
    //
    function APIEmployee(){
        // return "Employee API is Called";

        return EmployeeAPI::all();
    }
    // Adding Employee to Employees Database
    function addemployee(Request $request){
        $employeeapi = new EmployeeAPI();
        $employeeapi->name=$request->name;
        $employeeapi->email=$request->email;
        $employeeapi->phone=$request->phone;
        if($employeeapi){
            return ['result'=>"New Employee Added Great"];
        }else{
            return ['result'=>"New Employee Not Added"];
        } 
    }
}
