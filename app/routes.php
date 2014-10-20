<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'SessionsController@login');
Route::get('/login', array('uses' => 'SessionsController@login', 'as' => 'login'));
Route::get('/logout', array('uses' => 'SessionsController@logout', 'as' => 'logout'));
Route::post('/authenticate', array('uses' => 'SessionsController@authenticate', 'as' => 'authenticate'));

Route::group(array('before' => 'auth', 'prefix' => 'dashboard', 'namespace' => 'Dashboard'), function(){
    Route::resource('photos','PhotosController');
});
