<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class NamedRoute extends Controller
{
    //
    function show(){
        //  echo "Named Route Test";
        return redirect()->to('home/user/profile');
        
    }
}

