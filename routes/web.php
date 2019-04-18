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

Route::get('/aboutUs', function(){
	return view('aboutUs');
});

Route::get('/addItem', 'AddItemTypeController@show');

Route::get('/updateItem', 'AddItemTypeController@show2');

Auth::routes(); 

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/editProfile', function (){
	return view('editProfile');
})->middleware('auth');

Route::put('/updateProfile/{id}', 'editProf@update');

Route::post('/addItemType','AddItemTypeController@create');

Route::put('/addedItem', 'AddItemController@create');

Route::get('/products', 'AddItemController@show'); 

// Route::get('/addBooking/{id}', 'BookingController@index');

Route::put('/addBooking/{id}', 'BookingController@store')->middleware('auth');

Route::put('/expiredBooking/{id}', 'BookingController@destroy');

Route::get('/editItem', 'AddItemController@edit');

Route::put('/itemUpdate', 'AddItemController@update');

Route::delete('/itemDelete/{id}', 'AddItemController@destroy');

Route::get('/gallery', 'AddItemTypeController@index');

Route::get('/billing', 'BillingController@show')->middleware('auth');

Route::post('/confirmOrder/{id}', 'BillingController@create');

Route::post('/cancelOrder/{id}','BillingController@edit');

Route::get('/generateBill', 'BillingController@index');

Route::get('/searchItem', 'AddItemController@search');

Route::get('/txtSearch', 'AddItemController@txtSearch');

