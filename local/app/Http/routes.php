<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/', 'HomeController@index');
Route::get('products', 'ProductController@index');
Route::get('products/{cat}', 'ProductController@showCat');
Route::get('test', 'HomeController@test');
Route::get('product/{id}', 'ProductinfoController@index');
Route::get('contacts', 'ContactsController@index');
Route::get('dilevery', 'DileveryController@index');
//Route::get('basket', 'BasketController@index');
//Route::get('basket/{id}', 'BasketController@delete');





Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
	'admin' => 'Adminka\AdminController',
    'basket' => 'BasketController',
       
       
	
]);
