<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get("backend/login",function(){
    return View::make("auth.Login");
});
//sau khi an nut submit
Route::post("backend/login",function(){
    //lay gia tri form
    $user = Auth::user();
    $username = request("username");
    $password = request("password");
    if(Auth::Attempt(["username"=>$username,"password"=>$password]) && Auth::user()->type == 1)
         return redirect(url("backend/home"));
     else
         return redirect(url("backend/login?notify=invalid"));
});
//url: public/logout
Route::get('backend/logout',function(){
    Auth::logout();//Auth la doi tuong co san cua laravel
    return redirect(url("backend/login"));
});
//url: public/admin
Route::get("backend",function(){
    return redirect(url("backend/home"));
});
use App\Http\Controllers\Admin\HomeController;
Route::get("backend/home",[HomeController::class,"index"])->Middleware("check_login");
Route::get('/', function () {
    return view('welcome');
});
use App\Http\Controllers\Admin\UsersController;
//Read
Route::get("backend/users",[UsersController::class,"index"])->Middleware("check_login");
//Update Get
Route::get("backend/users/update/{id}",[UsersController::class,"update"])->Middleware("check_login");
//Update Post
Route::post("backend/users/updatePost/{id}",[UsersController::class,"updatePost"])->Middleware("check_login");
//Create Get
Route::get("backend/users/personal/{id}",[UsersController::class,"personal"])->Middleware("check_login");
//Create Get
Route::post("backend/users/personalPost/{id}",[UsersController::class,"personalPost"])->Middleware("check_login");
//Create Get
Route::get("backend/users/create",[UsersController::class,"create"])->Middleware("check_login");
//Create Post
Route::post("backend/users/createPost",[UsersController::class,"createPost"])->Middleware("check_login");
//Delete
Route::get("backend/users/delete/{id}",[UsersController::class,"delete"])->Middleware("check_login");
use App\Http\Controllers\Admin\CategoryController;
//Read
Route::get("backend/categorys",[CategoryController::class,"index"])->Middleware("check_login");
//Update Get
Route::get("backend/categorys/update/{id}",[CategoryController::class,"update"])->Middleware("check_login");
//Update Post
Route::post("backend/categorys/updatePost/{id}",[CategoryController::class,"updatePost"])->Middleware("check_login");
//Create Get
Route::get("backend/categorys/create",[CategoryController::class,"create"])->Middleware("check_login");
//Create Post
Route::post("backend/categorys/createPost",[CategoryController::class,"createPost"])->Middleware("check_login");
//Delete
Route::get("backend/categorys/delete/{id}",[CategoryController::class,"delete"])->Middleware("check_login");
