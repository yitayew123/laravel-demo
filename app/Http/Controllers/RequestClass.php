<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class RequestClass extends Controller
{
    function login(Request $request){
        echo "This request is From: ". $request->method();
        echo "<br>";
        echo "The User Entered is: ". $request->input('username');
        echo "<br>";
        echo "Your Password is: ". $request->input('password');
        echo "<br>";
        echo "The IP address is:". $request->ip();
        echo "<br>";

        if($request->method('post'))
        {
            echo "This is from Post Request";
        }
        else
        {
            echo "This is from other request";
        }
        echo "<br>";
        if($request->is('user-form2'))
        {
            echo "This is user form path Request";
        }
        else
        {
            echo "This is other path request";
        }
    }
}
