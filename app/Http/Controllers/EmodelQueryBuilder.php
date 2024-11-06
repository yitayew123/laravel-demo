<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;

class EmodelQueryBuilder extends Controller
{
    //
    function equery(){
        // Selecting All User From Users Database
        $response = user::get(); //Retrive All Record
        $response = user::all(); //Retrive All Record

        // Applying Where Condition
        $response = user::Where('password','1234')->get();
        // Selecting The fisrt Record
        $response = user::first();
        $response = [$response];
        // Selecting Based on ID
        $response = user::find(5);
        $response = [$response];
        // Inserting Records
        $response = user::insert([
            'name'=>'yared',
            'email'=>'yared@gmail.com',
            'email_verified_at'=>'2024-12-05 19:05:03',
            'password'=>'yared@1234',
            'remember_token'=>'1234',
            'created_at'=>'2024-12-05 19:05:03',
            'updated_at'=>'2024-12-05 19:05:03'
        ]);
        if($response){
            return "Data added!!";
        }
        else{
            return "Data Not added!!!";
        }
        // Updatting Record
        $response = user::Where('name','yared')->update(
            ['password'=>'yared@123456']);
        if($response){
            return "Data Updated!!";
        }
        else{
            return "Data Not Updated!!!";
        }
        // Delete Record
        $response = user::Where('name','yared')->delete();
        if($response){
            return "Data Deletted!!";
        }
        else{
            return "Data Not Deletted!!!";
        }
        return view('EmodelQueryBuilder',['users'=>$response]);
    }
}
