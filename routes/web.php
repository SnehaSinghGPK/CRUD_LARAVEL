<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\registerController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::view('register','register');
Route::post('registercode',[registerController::class,'registerFun']);

// show register route
Route::view('showregis','showregister');
Route::get('showregister',[registerController::class,'showregisterFun']);

// register delete route
Route::get('registerdelete/{id}',[registerController::class,'registerdeleteFun']);

// register edit route
Route::get('regisedit/{id}',[registerController::class,'registereditFun']);
Route::post('registerupdate',[registerController::class,'registerupdateFun']);