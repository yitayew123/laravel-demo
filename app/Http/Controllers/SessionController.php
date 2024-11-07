<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    //
    function login(Request $request){
        // Storring Single data to session
        $request->session()->put('username',$request->input('username'));

        // Storing all Data
        $request->session()->put('alldata',$request->input());


        return redirect('profilesession');
    }
    function logout(){
        session()->pull('username');
        return redirect('profilesession');
    }
}
