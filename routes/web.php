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

Route::middleware(['runall'])->group(function () {
  Route::get('/', 'MainController@getHome')->name('getHome');

	Auth::routes();

	Route::get('/home', 'HomeController@index')->name('home');


	// Admin ***************************************
	Route::prefix('/ad')->group(function () {

	  Route::get('/login', 'AdminController@getLogin')->name('adgetLogin');
	  Route::post('/login', 'AdminController@postLogin')->name('adpostLogin');

	  Route::middleware(['check_admin'])->group(function () {

	  	// Home
	  	Route::get('/', 'AdminController@getHome')->name('adgetHome');
	  	Route::post('/config', 'AdminController@updateConfig')->name('adupdateConfig');

	  	// Post
	  	Route::get('/post-add', 'AdminController@getAddPost')->name('adgetAddPost');
	  	Route::post('/post-add', 'AdminController@postAddPost')->name('adpostAddPost');
	  	Route::get('/post-edit/{id}', 'AdminController@getEditPost')->name('adgetEditPost');
	  	Route::post('/post-edit/{id}', 'AdminController@postEditPost')->name('adpostEditPost');
	  	Route::get('/post', 'AdminController@getListPost')->name('adgetListPost');
	  	Route::get('/post-del/{id}', 'AdminController@getDelPost')->name('adgetDelPost');

	  	// Banker
	  	Route::get('/banker-add', 'AdminController@getAddBanker')->name('adgetAddBanker');
	  	Route::post('/banker-add', 'AdminController@postAddBanker')->name('adpostAddBanker');
	  	Route::get('/banker-edit/{id}', 'AdminController@getEditBanker')->name('adgetEditBanker');
	  	Route::post('/banker-edit/{id}', 'AdminController@postEditBanker')->name('adpostEditBanker');
	  	Route::get('/banker', 'AdminController@getListBanker')->name('adgetListBanker');
	  	Route::get('/banker-del/{id}', 'AdminController@getDelBanker')->name('adgetDelBanker');

	  	// User
	  	Route::post('/user-add', 'AdminController@postAddUser')->name('adpostAddUser');
	  	Route::get('/user', 'AdminController@getListUser')->name('adgetListUser');
	  	Route::get('/user-del/{id}', 'AdminController@getDelUser')->name('adgetDelUser');
	  	Route::post('/update-password', 'AdminController@postUpdatePassword')->name('adpostUpdatePassword');

	  	Route::post('/upload-img', 'AdminController@uploadImage')->name('uploadImage');
	  });
	  
	});
	// END Admin ***********

	// FRONDEND ***********
	Route::get('/{cate}', 'MainController@getCate')->name('getCate')->where('cate', config('config.cate')[0].'|'.config('config.cate')[1].'|'.config('config.cate')[2].'|'.config('config.cate')[3].'|'.config('config.cate')[4].'|'.config('config.cate')[5]);
	Route::get('/{slug}', 'MainController@getPost')->name('getPost');
	Route::post('/{slug}', 'MainController@getMorePost')->name('getMorePost');
});
