<?php

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
    return view('Welcome');
});

Route::get('About',function(){
   return view('Week2.About'); 
});

Route::get('Hallo', function(){
   return view('Hello'); 
});

Route::get('Gallery', function(){
   return view('Week2.Gallery'); 
});