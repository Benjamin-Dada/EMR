<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => 'web'], function () {
	Route::get('/', [
	'uses'=>'\App\Http\Controllers\HomeController@index',
	'as'=>'index'
	]);
    Route::auth();
    /*Route::group(['prefix' => 'doctor'], function () {
    Route::get('patients', function ()    {
        // Matches The "/admin/users" URL
    	});
	});
	Route::group(['prefix' => 'nurse'], function () {
    Route::get('patients', function ()    {
        // Matches The "/admin/users" URL
    	});
	});
	Route::group(['prefix' => 'lab'], function () {
    Route::get('patients', function ()    {
        // Matches The "/admin/users" URL
    	});
	});
	Route::group(['prefix' => 'frontdesk'], function () {
    Route::get('patients', function ()    {
        // Matches The "/admin/users" URL
    	});
	});
	*/
	/*Route::group(['prefix' => 'pharm'], function () {
    Route::get('patients/{patient_id}/vitals', [
    	'use'=>'\App\Http\Controllers\VitalsController@index',
    	'as'=>'patient.vitals'
    	]);
	});
*/
    Route::resource('patients', 'PatientController');

    Route::get('patients/{patient_id}/vitals',[
    	'uses'=>'\App\Http\Controllers\VitalsController@index'
    	]);

    Route::post('patients/{patient_id}/vitals',[
    	'uses'=>'\App\Http\Controllers\VitalsController@store'
    	]);
});
