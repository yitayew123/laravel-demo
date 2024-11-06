<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class RouteMethodsExample extends Controller
{
    function get(){
        return "This is From Get Method";
    }
    function post(){
        return "This is From post Method";
    }
    function put(){
        return "This is From put Method";
    }
    function delete(){
        return "This is From delete Method";
    }
    function any(){
        return "This is From any Method";
    }
    function group1(){
        return "This is From group 1 Method";
    }
    function group2(){
        return "This is From group 2 Method";
    }
}
