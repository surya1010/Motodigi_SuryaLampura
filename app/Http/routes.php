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


// Route::group(['prefix'=>'api','middleware'=>'auth:api'], function(){
 
//    Route::get('/login', [
//    		'uses' => 'ApiUserController@login'
//    ]);
 
// });


Route::group(['prefix' => 'api','middleware'=>'api.auth'], function () {
    Route::get('/login', 'ApiUserController@login');
    

    Route::get('/outlet', 'OutletController@getList');
});



Route::group(['middleware'=>'web'], function (){
 
   Route::auth();
 
   Route::get('/home', 'HomeController@index');
 
});

// Route::auth();

// Route::get('/home', 'HomeController@index');
