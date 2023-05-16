<?php

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

// Route::get('/home/{name}', function ($name) {
//     $name = ;
//     return view('home')->with($name);
// });

// Route::get('/demo',function(){
//     view('welcome');
// });

// Route::post('/test',function(){
//     echo"test the route";
// });

Route::get('/demo/{name}/{id?}',function($name,$id = null){
    $data = compact('name','id');
    return view('home')->with($data);

});

