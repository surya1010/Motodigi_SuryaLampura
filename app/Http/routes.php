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

    Route::get('/product/{outlet_id}', [
    	'middleware' => 'customer.auth',
    	'uses'	=>	'ProductController@getProductBaseOutletId'
    ]);

    Route::post('/transaksi/store', [
    	'middleware' => 'customer.auth',
    	'uses'	=>	'TransaksiController@store'
    ]);
});



Route::group(['middleware'=>'web'], function (){
 
   Route::auth();
 
   Route::get('/home', 'HomeController@index');
 
   Route::get('/transaksi', 'TransaksiController@index');
});

// Route::auth();

// Route::get('/home', 'HomeController@index');
