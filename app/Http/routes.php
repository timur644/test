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

Route::get('/items',   'ItemController@read');   //read


Route::get('/items/create', 'ItemController@add');     //form
Route::post('/items/create', 'ItemController@create'); //create


Route::get('/items/update', 'ItemController@edit');    //form
Route::post('/items/update', 'ItemController@update'); //save

Route::get('/items/delete', 'ItemController@delete');


