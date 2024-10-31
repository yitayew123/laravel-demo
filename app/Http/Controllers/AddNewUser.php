<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddNewUser extends Controller
{
    function adduser(Request $request)
    {
        // return $request;
        echo "your skils are: ";
        print_r($request->skill);
        echo "<br>";
        echo "Your Address is: ".$request->city;
        echo "<br>";
        echo "Your Age is: ".$request->age;
        echo "<br>";
        echo "your Gender is: ".$request->gender;
    }
}
