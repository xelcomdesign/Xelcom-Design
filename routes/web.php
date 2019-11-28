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
    return view('welcome');
});

Route::get('/Design', function(){
    return "Carte des Visite Profetionnelle";
});
Route::get("/Creations","CreationsController@index"); 
Route::get("/creations/{id}","CreationsController@show");


Route::get("/Design/{id}", function($id){
    return "je suis am cafe $id";
});
Route::get("/","HomeController@index");
Route::get("/products/{id})", "HomeController@show");
