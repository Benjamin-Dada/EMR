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
   // Route::get('register', 'HomeController@register' )->middleware('admin');

    Route::auth();

    Route::get('users/register', [
    'uses'=>'UserController@index',
    'as'=>'user.index'
    ]);
    Route::post('users/register', [
        'uses' => 'UserController@store',
        'as' => 'user.store'
    ]);
    
    Route::resource('patients', 'PatientController');

    Route::get('patients/{patient}/vitals',[
        'uses'=>'VitalsController@index',
        'as'=>'vitals.index'
    ]);
    Route::post('patients/{patient}',[
        'uses'=>'VitalsController@store',
        'as'=>'vitals.store'
    ]);
    Route::get('patients/{patient}/vitals/edit',[
        'uses'=>'VitalsController@edit',
        'as'=>'vitals.edit'
    ]);
    Route::put('patients/{patient}/vitals',[
        'uses'=>'VitalsController@update',
        'as'=>'vitals.update'
    ]);

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

    Route::get('patients/{patient}/drugs', [
        'uses'=>'DrugsController@index',
        'as' => 'drugs.index'
    ]);
    Route::post('patients/{patient}/drugs', [
        'uses'=>'DrugsController@store',
        'as' => 'drugs.store'
    ]);
    /*Route::put('patients/{patient}/drugs', [
        'uses'=>'DrugsController@store',
        'as' => 'drugs.store'
    ]);
*/    
    Route::post('search', ['uses'=>'SearchController@index']);

    /*Route::post('/pay', [
    'uses' => 'PaymentController@redirectToGateway',
    'as' => 'pay'
    ]);

    Route::get('/payment/callback', 'PaymentController@handleGatewayCallback');
*/
});
