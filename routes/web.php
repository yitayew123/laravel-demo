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

// Middleware Example (Global Middleware)
use App\Http\Middleware\CheckAge;
Route::view('middleware','middleware');

// Middleware Group on Single Route
Route::view('middleware2','middleware2')->middleware('check1');
Route::view('middleware3','middleware3');

// Middleware Group on Multiple Routes

Route::middleware('check1')->group(function(){
    Route::view('m1','middleware3');
    Route::view('m2','middleware3');
    Route::view('m3','middleware3');
    Route::view('m4','middleware3');
});

// Assigning One or More Middleware to Route
use App\Http\Middleware\CheckAge3;
use App\Http\Middleware\CheckCountry2;

Route::view('mw4','middleware4')->middleware([CheckAge3::class,CheckCountry2::class]);
Route::view('mw5','middleware5')->middleware(CheckCountry2::class);

// Connecting to MYSQL Database
use App\Http\Controllers\DatabaseController;
Route::get('dbuser',[DatabaseController::class,'users']);

// Model in Laravel
use App\Http\Controllers\StudentController2;
Route::get('students',[StudentController2::class,'getstudent']);

// Database Class Quiery Builder
use App\Http\Controllers\DbQueryBuilder;
Route::get('querybuilder',[DbQueryBuilder::class,'Query']);

// Eleouquent Model Query Builder
use App\Http\Controllers\EmodelQueryBuilder;
Route::get('emqb',[EmodelQueryBuilder::class,'equery']);

// Route Methods Examples
use App\Http\Controllers\RouteMethodsExample;
// Route::get('methodsexample',[RouteMethodsExample::class,'get']);
// Route::post('methodsexample',[RouteMethodsExample::class,'post']);
// Route::put('methodsexample',[RouteMethodsExample::class,'put']);
// Route::delete('methodsexample',[RouteMethodsExample::class,'delete']);

// For Calling any Methods we use any method
// Route::any('methodsexample',[RouteMethodsExample::class,'any']);

// For Calling match method we use match methods
Route::match(['get','post'],'methodsexample',[RouteMethodsExample::class,'group1']);
Route::match(['put','delete'],'methodsexample',[RouteMethodsExample::class,'group2']);

// Rout For RouteMethodExample blade
Route::view('form','RouteMethodExample');

// Route For HTTP Request class
Route::view('user-form','RequestClass');
use App\Http\Controllers\RequestClass;
Route::post('user-form2',[RequestClass::class,'login']);

// Session in Laravel
Route::view('loginsession','SessionView1');
Route::view('profilesession','SessionView2');

use App\Http\Controllers\SessionController;
Route::post('loginsession',[SessionController::class,'login']);
Route::get('logout',[SessionController::class,'logout']);


// File Uploadding |Image
Route::view('imageupload','UploadFile');
use App\Http\Controllers\FileUpload;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Lang;

Route::post('imageupload',[FileUpload::class,'uploadimage']);

// Localization Route
Route::view('localization','localization');
Route::view('LocalizationAbout','LocalizationAbout');

// Localization for specific Route
Route::get('localization/{lang}',function($lang){
    App::setlocale($lang);
    return view('localization');
});

// Inserting Data Using Form
Route::view('add-employee','add-employee');

// Importing Controller
use App\Http\Controllers\EmployeeController;
// Route For adding Records
Route::post('add-employee',[EmployeeController::class,'Add_Employee']);

// Route For Fetching Records 
Route::get('list-employee',[EmployeeController::class,'list']);

// Route For Deletting Records
Route::get('delete/{id}',[EmployeeController::class,'delete']);

// Route For Edit
Route::get('edit/{id}',[EmployeeController::class,'edit']);
// Route For editstudent
Route::put('edit-employee/{id}', [EmployeeController::class,'editstudent']);
Route::put('edit-employee/{id}', [EmployeeController::class,'editstudent']);

// Searching Employees From the database
Route::get('search',[EmployeeController::class,'search']);

// Relationship in Database
use App\Http\Controllers\RelationshipController;
// Route For One-to-One Relationship
Route::get('relationship',[RelationshipController::class,'product_list']);
// Route For One-to-Many Relationship
Route::get('one-many',[RelationshipController::class,'One_to_Many']);
// Route for Many-to-One Relationship
Route::get('many-one',[RelationshipController::class,'Many_to_One']);

