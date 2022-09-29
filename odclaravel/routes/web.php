<?php

use App\Http\Controllers\Student;
use App\Http\Controllers\User;
use Illuminate\Support\Facades\Route;

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

Route::group(['prefix'=>"student","middleware"=>'auth'],function(){
    Route::get('index',[Student::class,"index"]);
    Route::get('create',[Student::class,"create"]);
    Route::post('store',[Student::class,"store"]);
    Route::post('update',[Student::class,"update"]);
    Route::get('edit/{id}',[Student::class,"edit"]);
    Route::get('delete/{id}',[Student::class,"delete"]);
});


Route::get("login",[User::class,"login"])->name("login");
Route::post("loginrequest",[User::class,"loginrequest"]);
Route::get("logout",[User::class,"logout"]);
