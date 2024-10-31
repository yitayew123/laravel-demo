<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// calling home and about View from Route
Route::view('home','home');
Route::view('about','about');
Route::view('admin','admin.login');
// Route::view('demo','Demo');

// calling home and about view from controller
// import Created Controller

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\UserController2;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AddNewUser;
use App\Http\Controllers\FormValidation;
// calling home or about page
Route::get('Demo',[UserController::class,'UserHome']);
Route::get('about',[UserController::class,'aboutus']);
Route::get('adminlog',[UserController::class,'adminlogin']);
Route::get('adminlog2',[UserController::class,'adminlogin2']);
Route::get('Demo',[UserController::class,'demo']);
Route::get('home2',[HomeController::class,'index']);

// User Form Part 1
Route::view('userform','userform');
Route::Post('add-user',[UserController2::class,'AddUsser']);

// User Form Part 2
Route::view('userform2','userform2');
Route::post("adduser",[AddNewUser::class,"adduser"]);

// Form Vallidation
Route::view('formvalidation','formvalidation');
Route::post('validation',[FormValidation::class,"formvalidation"]);

// URL Generation Example
Route::view('url1','url1');
Route::view('userurl1','url1');
Route::view('url2','url2');

// Named Route Route Defnition (View)
Route::view('home/user/profile','namedroute')->name('profile');
// Named Route Route Defnition (Controller)
use App\Http\Controllers\NamedRoute;
Route::get('show',[NamedRoute::class,'show']);

// Route Grouping Using Prefix (View)
Route::view('student/grouping','groupprefix');
// Route Grouping Using Prefix (Controller)
use App\Http\Controllers\GroupPrefix;
Route::get('student/show',[GroupPrefix::class,'show']);
Route::get('student/add',[GroupPrefix::class,'add']);

// Creating Group Route Using Prefix
Route::prefix('student')->group(function(){
    Route::view('/grouping','groupprefix');
    Route::get('/show',[GroupPrefix::class,'show']);
    Route::get('/add',[GroupPrefix::class,'add']);
});

// Creating Group Route Using Controller
use App\Http\Controllers\StudentController;
Route::get('show',[StudentController::class,'show']);
Route::get('add',[StudentController::class,'add']);
Route::get('delete',[StudentController::class,'delete']);
Route::get('about/{name}',[StudentController::class,'about']); // Dynamic Route

// Grouping Routes Using Controllers
Route::controller(StudentController::class)->group(function(){
    Route::get('show','show');
    Route::get('add','add');
    Route::get('delete','delete');
    Route::get('about/{name}','about'); // Dynamic Route
});















