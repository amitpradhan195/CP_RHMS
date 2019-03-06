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
    return view('index');
});

Route::get('/index', function (){
	return view('index');
});

Route::get('/adminDash', function (){
	return view('adminDash');
})->middleware('auth');

Route::get('/userDash', function (){
	return view('userDash');
})->middleware('auth');

Route::get('/bookings', function (){
	return view('booking');
})->middleware('auth');

Route::get('/gallery', function (){
	return view('gallery');
})->middleware('auth');

Route::get('/products', function (){
	return view('products');
})->middleware('auth');

Route::get('/aboutUs', function(){
	return view('aboutUs');
})->middleware('auth');

Route::get('/billing', function (){
	return view('billing');
})->middleware('auth');

Route::get('/addItem', function (){
	return view('addItem');
})->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/editProfile', function (){
	return view('editProfile');
})->middleware('auth');

// Route::get('/editProf/{id}', 'editProfile@store')->name('');

Route::get('/editProfile/{id}', 'editProf@edit');
// Route::put('/updateProfile/{id}', 'editProf@store');
Route::put('/updateProfile/{id}', 'editProf@update');

Route::put('/addedItem', 'AddItemController@create');

Route::get('/products', 'AddItemController@show');