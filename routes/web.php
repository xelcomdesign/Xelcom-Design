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
Route::get("/Creations","CreationsController@index");
Route::get("/creations/{id}","CreationsController@show");


Route::get("/","HomeController@index");
Route::get("/products/{id})", "HomeController@show");

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get("/products/{id}", "HomeController@index");
//Route::get("/categories",'HomeController@index');
Route::get("/categories",'CategoriesController@index');

Route::resource('product', 'ProductsController');
Route::get("/product/edit/{id}", "ProductsController@edit")->name('editer_produit');
Route::patch("/product/edit/{id}", "ProductsController@update")->name('update_produit');
//!---xelcom validation contact--->
Route::get('contact', 'ContactController@create');
Route::post('contact', 'ContactController@store');