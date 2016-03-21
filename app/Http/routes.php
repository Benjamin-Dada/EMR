<?php
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

    Route::resource('patients', 'PatientController');

    Route::get('patients/{patient}/vitals',[
        'uses'=>'\App\Http\Controllers\VitalsController@index',
        'as'=>'vitals.index'
    ]);

    Route::post('patients/{patient}/vitals',[
        'uses'=>'\App\Http\Controllers\VitalsController@store',
        'as'=>'vitals.store'
    ]);

    Route::group(['prefix' => 'doctor'], function () {
        Route::get('patients', function () {
                return "Hello I am the doctor's index page";    # code...
            });
	});

});
