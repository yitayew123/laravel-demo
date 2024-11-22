<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
// Creating Route for testapi

Route::get('testapi', function(){
    // return "You Are Configured API Successfully";
    return ['name'=>'yitayew', 'age'=>32];
});
// Creating Route for EmployeeAPI
use App\Http\Controllers\ApiController;
Route::get('employeeapi',[ApiController::class,"APIEmployee"]);
Route::post('add-employeeapi',[ApiController::class,'addemployee']);