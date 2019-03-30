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

Route::get('/bookings', 'BookingController@show')->middleware('auth');

Route::get('/gallery', function (){
	return view('gallery');
});

Route::get('/aboutUs', function(){
	return view('aboutUs');
});

Route::get('/billing', function (){
	return view('billing');
})->middleware('auth');

Route::get('/addItem', 'AddItemTypeController@show');

Route::get('/updateItem', 'AddItemTypeController@show2');

Auth::routes(); 

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/editProfile', function (){
	return view('editProfile');
})->middleware('auth');

Route::get('/editProfile/{id}', 'editProf@edit');

Route::put('/updateProfile/{id}', 'editProf@update');

Route::post('/addItemType','AddItemTypeController@create');

Route::put('/addedItem', 'AddItemController@create');

Route::get('/products', 'AddItemController@show'); 

Route::get('/addBooking/{id}', 'BookingController@index');

Route::put('/addBooking/{id}', 'BookingController@store')->middleware('auth');

Route::get('/expiredBooking/{id}', 'BookingController@create');

Route::put('/expiredBooking/{id}', 'BookingController@destroy');

Route::get('/editItem', 'AddItemTypeController@edit');

