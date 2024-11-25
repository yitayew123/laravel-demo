<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\EmployeeAPI;
use Illuminate\Support\Facades\Validator;
class ApiController extends Controller
{
    function APIEmployee(){
        // return "Employee API is Called";

        return EmployeeAPI::all();
    }
    // Adding Employee to Employees Database
    function addemployee(Request $request){
        $rules = array(
            "name" => "required | min:2 | max:10",
            "email" => "required | email",
            "phone" => "required | min:2"
        );
        $validation = Validator::make($request->all(),$rules);
        if($validation->fails()){
            return $validation->errors();
        }
        else
        {
            $employeeapi = new EmployeeAPI();
            $employeeapi->name=$request->name;
            $employeeapi->email=$request->email;
            $employeeapi->phone=$request->phone;
            if($employeeapi->save()){
            return ['result'=>"New Employee Added"];
            }else
            {
                    return ['result'=>"New Employee Not Added"];
                } 
        } 
    }
    function UpdateEmployee(Request $request){
        // return "Update API Function is Called";
        // return $request ->id;
        $employee = EmployeeAPI::find($request->id);
        $employee->name = $request->name;
        $employee->email = $request->email;
        $employee->phone = $request->phone;
        if($employee->save()){
            return ['result'=>"Employee Data Updated"];
        }else{
            return ['result'=>"Employee Data Not Updated"];
        } 
    }
    function DeleteEmployee($id){
        // return $id;
        $employeedel = EmployeeAPI::destroy($id);
        if($employeedel){
            return ['Result'=>'Employee Records Are Deleted'];
        }
        else{
            return ['Result'=>'Employee Records Are Not Deleted'];
        }
    }
    function SearchEmployee($name){
        // return "Search Method is called";
        $employeesearch = EmployeeAPI::where("name","like","%$name%")->get();
        if($employeesearch){
            return ['Result'=>$employeesearch];
        }
        else{
            return ['Result'=>'Data is Not Found'];
        }
    }  
}
