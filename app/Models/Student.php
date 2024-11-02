<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
    protected $table = "college_students";
    function TestFunction(){
        echo "Well come to Test Function";
    }

}

