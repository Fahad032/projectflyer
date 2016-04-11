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



Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/', function () {
        return view('pages.home');
    });
	
	Route::resource('flyers', 'FlyersController');
	Route::post('flyers/{zip}/{street}/photos', 'FlyersController@addPhoto');
	Route::delete('photo/{id}', 'FlyersController@photoDestroy');	
	
	
	Route::get('flyers/{zip}/{street}', 'FlyersController@show');

    Route::get('/home', 'HomeController@index');
    Route::get('login/', function(){
    	return view('auth.login');	
    });
    Route::get('register/', function(){
    	return view('auth.register');	
    });
    Route::get('password/reset/', function(){
    	return view('auth.passwords.email');	
    });
	
});
