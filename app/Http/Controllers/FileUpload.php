<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUpload extends Controller
{
    //
    function uploadimage(Request $request){
        // $path = $request->file('file')->store('puplic');
        $path = $request->file('file')->storeAs('puplic','Myphoto.png');
        $FileNameArray = explode('/',$path);
        $FileName= $FileNameArray[1];
        return view('DisplayFile',['path'=>$FileName]);
    }
}

