<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\employee;
use GuzzleHttp\Psr7\Request as Psr7Request;

class EmployeeController extends Controller
{
    function Add_Employee(Request $request){
        $employee = new employee();
        $employee->name=$request->name;
        $employee->email=$request->email;
        $employee->phone=$request->phone;
        $result = $employee->save();
        if($request){
            // return "Employee is added";
            // Redirected to list-employee url
            return redirect('list-employee');
        }
        else{
            return "Employee is not added";
        }
    }
    function list(){
        $employeedata = employee::paginate(3);
        // return $employeedata;
        return view('list-employee',['data'=>$employeedata]);
    }
    function delete($id){
        $isDeleted = employee::destroy($id);
        if($isDeleted){
            return redirect('list-employee');
        }
        else{
            return "Record is not Deleted !!!";
        }

    }
    function edit($id){
        $isEdited = employee::find($id);
        return view('edit-employee',['data'=>$isEdited]);
    }
    function editstudent(Request $request, $id){
        $isEdited2 = employee::find($id);
        $isEdited2->name=$request->name;
        $isEdited2->email=$request->email;
        $isEdited2->phone=$request->phone;
        // return $isEdited2->save();
        if($isEdited2->save()){
            return redirect('list-employee');
        }
        else{
            return "Employee Details is not Updated";
        }

    }
    function search(Request $request){
        // return $request->search;
        $EmployeeDataSearch = employee::where("name","like","%$request->search%")->get();
        return view('list-employee',['data'=>$EmployeeDataSearch,'search'=>$request->search]);  
    }
}
