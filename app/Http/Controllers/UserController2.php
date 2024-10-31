<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController2 extends Controller
{
    function AddUsser(Request $request){
        echo "Your Name is:".$request->username."<br>";
        echo "";
        echo "Your Address is:".$request->city."<br>";
        echo "";
        echo "Your contact is:".$request->input('email')."<br>";
    }
}
