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


$options = [
    'prefix' => 'api', 
    //'middleware' => 'auth:api'
];

Route::group($options, function () {
    Route::post('/login', 'ApiUserController@login');
    

    Route::get('/outlet', [
    	'middleware' => 'customer.auth',
    	'uses'	=>	'OutletController@getList'
    ]);
});



Route::group(['middleware'=>'web'], function (){
 
   Route::auth();
 
   Route::get('/home', 'HomeController@index');
 
});

// Route::auth();

// Route::get('/home', 'HomeController@index');
