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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/form', 'FormController@showForm');

// Route::get('/store', 'FormController@store');

Route::post('/store', 'FormController@store');


Route::get('orm-test', function()
{
	$quote = new \App\Models\Quote();
	$quote->author_first_name = 'Jack';
	$quote->author_last_name = 'Thomas';
	$quote->content = 'Is a made up person';
	$quote->save();
});