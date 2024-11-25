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
// Add Employee Route
Route::post('add-employeeapi',[ApiController::class,'addemployee']);
// Update Employee Route
Route::put('update-employee',[ApiController::class,'UpdateEmployee']);
// Delete Employee Route
Route::delete('delete-employee/{id}',[ApiController::class,'DeleteEmployee']);
// Search Employee Route
Route::get('search-employee/{name}',[ApiController::class,'SearchEmployee']);

// Route For Resource Controller API
use App\Http\Controllers\ResourceControllerAPI;
Route::resource('resourcecontrollerapi',ResourceControllerAPI::class);
