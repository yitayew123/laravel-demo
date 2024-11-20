<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    //
    function ProductData(){
        return $this->hasOne('App\Models\Product');
    } 
    function Product_Many(){
        return $this->hasMany('App\Models\Product');
    }
}

