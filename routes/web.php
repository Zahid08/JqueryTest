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

Route::get('/', function(){
	return redirect()->route('login.index');
});

Route::get('/logout', 'LogoutController@index')->name('logout.index');
//Route::post('/logout', 'LogoutController@index')->name('logout.index');

Route::get('/login', 'LoginController@index')->name('login.index');
Route::post('/login', 'LoginController@verify')->name('login.verify');

Route::get('/photo', 'PhotoController@index')->name('photo.index');
Route::post('/photo', 'PhotoController@store')->name('photo.store');


Route::get('/ajax/accountinfo', 'AjaxController@accountinfo');
Route::get('/account/numbers', 'AjaxController@accnumbers');

Route::group(['middleware' => ['sess']], function(){

	Route::get('/home', 'HomeController@index')->name('home.index');

	Route::get('/accounts', 'AccountController@index')->name('account.index');
	Route::get('/accounts/show/{id}', 'AccountController@show')->name('account.show');

	Route::group(['middleware' => ['admin']], function(){
		Route::get('/accounts/create', 'AccountController@create')->name('account.create');
		Route::post('/accounts/create', 'AccountController@store')->name('account.store');

		Route::get('/accounts/edit/{id}', 'AccountController@edit')->name('account.edit');
		Route::post('/accounts/edit/{id}', 'AccountController@update')->name('account.update');


		Route::get('/accounts/delete/{id}', 'AccountController@delete')->name('account.delete');
		Route::post('/accounts/delete/{id}', 'AccountController@destroy')->name('account.destroy');
	});
	
	
});



//Route::resource('/acctypes', 'AccountTypeController');