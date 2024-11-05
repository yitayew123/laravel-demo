<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class DbQueryBuilder extends Controller
{
    
    function Query(){
        // Retriving all Data From Database
        $response = DB::table('users')->get();
        // Retriving based on Condition
        $response = DB::table('users')->where('name','yitayew')->get();
        // Selecting The first row only
        $response = DB::table('users')->first();
        $response = [$response]; // Converting to Array

        // Inserting Records
        $response = DB::table('users')->insert([
            'name'=>'Haileab',
            'email'=>'hayleab@gmail.com',
            'email_verified_at'=>'2024-11-05 19:05:03',
            'password'=>'hayl@123',
            'remember_token'=>'123',
            'created_at'=>'2024-11-05 19:05:03',
            'updated_at'=>'2024-11-05 19:05:03'
        ]);
        if($response){
            return "Data added!!";
        }
        else{
            return "Data Not added!!!";
        }
        // Updatting Record
        $response = DB::table('users')->where('name','haileab')->update(
            ['password'=>'hayl@1234']);
        if($response){
            return "Data Updated!!";
        }
        else{
            return "Data Not Updated!!!";
        }
        // Deletting Record
        $response = DB::table('users')->where('name','haileab')->delete();
        if($response){
            return "Data Deleted!!";
        }
        else{
            return "Data Not Deleted!!!";
        }
        return view('DBqueryView',['users'=>$response]);
    }
}
