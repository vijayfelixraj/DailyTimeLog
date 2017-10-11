<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/', function () {
    return Redirect::to('login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth', 'as' => 'main.'], function () {
	$controllers = array(
			'dailytimelog' => 'DailyTimeLogController',
			'user' => 'UsersController',
            'teamtimelog' => 'TeamTimeLogController'
		);
	foreach ($controllers as $key => $controller) {
        //Will generates Crud functions (index,create, edit, delete, update, store)
        Route::get($key . '/index', array('as' => $key . '.index', 'uses' => $controller . '@index'));
        Route::resource($key, $controller);
        Route::post($key . '/index', array('as' => $key . '.search', 'uses' => $controller . '@index'));
        Route::post($key . '/rest', array('as' => $key . '.rest')); // here applied rest route
    }
   	Route::get('dailytimelog/destroy/{id}', array('as' => 'dailytimelog.destroy', 'uses' => 'DailyTimeLogController@destroy'));
    Route::get('teamtimelog/destroy/{id}', array('as' => 'teamtimelog.destroy', 'uses' => 'TeamTimeLogController@destroy'));
    Route::get('user/profileView/{id}', array('as' => 'user.profileView', 'uses' => 'UsersController@profileView'));
    Route::Put('user/updateProfile/{id}', array('as' => 'user.updateProfile', 'uses' => 'UsersController@updateProfile'));


});
