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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/comingsoon', function () {
    return view('comingsoon.comingsoon');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['as' => 'admin.', 'prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth', 'admin']], function(){
	//Declare here all the admin routes
	Route::get('dashboard', 'DashboardController@index')->name('dashboard');
	Route::resource('client', 'ClientController');
	Route::resource('pages', 'PagesController');
	Route::resource('banner', 'HomeBannerController');
});

Route::group(['as' => 'author.', 'prefix' => 'author', 'namespace' => 'Author', 'middleware' => ['auth', 'author']], function(){
	//Declare here all the author routes
	Route::get('dashboard', 'DashboardController@index')->name('dashboard');
});
