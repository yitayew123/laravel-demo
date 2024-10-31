<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//  use for cheking view exsistance
use Illuminate\Support\Facades\View;

class UserController extends Controller
{
    //
    function UserHome(){
        return view('home');

    }
    function aboutus(){
        return view('about');

    }
    function adminlogin(){
        return view('admin.login');
    }
// checking for view existance
    function adminlogin2(){
        if (view::exists('admin.login2')){
            return view("admin.login");
        }
        else
        {
            echo "view doesn't exist";
        }
        
    }
    function demo(){
        $Name = "yitayew";
        $users = ['yitayew','solomon','yared'];
        return view('Demo',["name"=>$Name,"family"=>$users]);
    }
}





