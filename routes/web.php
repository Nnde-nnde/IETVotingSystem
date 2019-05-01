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
    return view('index');
});
Route::get('/results', function(){
    return view ('results');
});
Route::get('/about', function(){
    return view ('about');
});
Route::get('/codes', function(){
    return view ('codes');
});
Route::get('/contact', function(){
    return view ('contact');
});
Route::get('/single', function(){
    return view ('single');
});
