<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class FormValidation extends Controller
{
    function formvalidation(Request $request){
        $request->validate(
            // Default Message
            ['username'=>'required | min:3 |max:15',
                            'city' => 'required | min:3 |max:15 |uppercase',
                            'email' => 'required | email',
                            'skill' => 'required'

            ],
    // Custome Message
    [
        'username.required'=>'User Field can Not Be Empty!!!',
        'username.min'=>'Should be a Minimum of 3 Character',
        'username.max'=>'Maximum Character Should be 15!!!',
        'city.required'=>'Address can Not Be Empty!!!',
        'email.required'=>'The E-mail Should be Vallid!!!',
        'skill.required'=>'Please Select at least One Skill!!!',
        'city.uppercase'=>'City should be in upper case only'
    ]);
    return $request;
    }
}

