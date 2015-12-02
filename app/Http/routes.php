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

/*Route::get('/', function () {
    return view('login');
});
*/


Route::get('login','HomeController@login');
//Route::get('admin','HomeController@login');
Route::post('login',array('before' => 'csrf', 'uses' => 'HomeController@login'));
Route::get('logout','HomeController@logout');
Route::post('logout','HomeController@login');
Route::get('/','HomeController@main');
Route::post('order','HomeController@order');
Route::get('uploadBukti','HomeController@upload');
Route::post('uploadBukti','HomeController@upload');
Route::get('verifikasi/{id}','HomeController@verifikasi');
Route::get('detail/{id}','HomeController@detail');
//LOGIN
Route::group(['middleware' => 'auth'], function()
{
	Route::get('login','HomeController@index');
	
	
	//POST
	
});
