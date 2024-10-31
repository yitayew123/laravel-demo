<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // For database usage

use function Laravel\Prompts\select;

class DatabaseController extends Controller
{
    //
    function users(){
        $users= DB::select('select * from users');
        return view("databaseuser",['users'=>$users]);
    }
}
