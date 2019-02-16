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

Route::get('/index', function (){
	return view('index');
});

Route::get('/bookings', function (){
	return view('booking');
});

Route::get('/gallery', function (){
	return view('gallery');
});

Route::get('/categories', function (){
	return view('categories');
});

Route::get('/aboutUs', function(){
	return view('aboutUs');
});

Route::get('/billing', function (){
	return view('billing');
});