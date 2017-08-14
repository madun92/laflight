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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'Front\FrontController@index')->name('front');


/**
 *  Frontend Routes
 */
Route::group(['middleware' => 'auth', 'namespace' => 'Front'], function(){
	Route::get('/', 'FrontController@index');
	Route::group(['middleware' => ['auth', 'Role:admin']], function(){

		// Route::resource('user', 'UserController');
	});
});
/**
 *  Backend Routes
 */
Route::group(['middleware' => ['auth', 'Role:admin,editor'], 'prefix' => 'back', 'namespace' => 'Back'], function(){
	// Route::get('/', 'BackController@index');
	Route::group(['middleware' => ['auth', 'Role:admin']], function(){

		Route::resource('user', 'UserController');
	});
});