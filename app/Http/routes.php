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
	'uses'=>'HomeController@index',
	'as'=>'index'
	]);

//    Route::get('patients/{patient}/notes', 'NotesController@index');
    Route::get('patients/{patient}/notes', [
        'uses'=>'NotesController@index',
        'as' => 'notes.index'
    ]);
    Route::post('patients/{patient}/notes', [
        'uses'=>'NotesController@store',
        'as' => 'notes.store'
    ]);

    Route::get('patients/{patient}/tests', [
        'uses'=>'TestController@index',
        'as' => 'test.index'
    ]);
    Route::post('patients/{patient}/tests', [
        'uses'=>'TestController@store',
        'as' => 'test.store'
    ]);
    Route::auth();

    Route::resource('patients', 'PatientController');

    Route::get('patients/{patient}/vitals',[
        'uses'=>'VitalsController@index',
        'as'=>'vitals.index'
    ]);
    
    Route::post('search', ['uses'=>'\App\Http\Controllers\SearchController@index']);
    
    Route::post('patients/{patient}',[
        'uses'=>'VitalsController@store',
        'as'=>'vitals.store'
    ]);

    Route::put('patients/{patient}',[
        'uses'=>'PatientController@update',
        'as'=>'patients.update'
    ]);
/*
    Route::group(['prefix' => 'doctor'], function () {
        Route::get('patients', function () {
                return "Hello I am the doctor's index page";    # code...
            });
	});*/


});
