<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seller;
use App\Models\Product;

class RelationshipController extends Controller
{
    //
    function product_list(){
        return Seller::find(2)->ProductData;
    }
    function One_to_Many(){
        return Seller::find(2)->Product_Many;
    }
    function Many_to_One(){
        return Product::with('seller')->get();
    }
    
}
