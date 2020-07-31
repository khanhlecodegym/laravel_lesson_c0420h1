<?php

use Illuminate\Support\Facades\Route;

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



Route::get('/', 'HelloController@index');
// Route::get('hello', 'HelloController@hello');
Route::view('hello', 'about');

Route::get('/services', 'ServiceController@index');
Route::post('/services', 'ServiceController@store');
// Route::view('/services', 'services');


// Route::get('/codegymer', 'CodegymerController@index');
// Route::get('/codegymer/create', 'CodegymerController@create');
// Route::post('/codegymer', 'CodegymerController@store');
// Route::get('/codegymer/{codegymer}', 'CodegymerController@show');
// Route::get('/codegymer/{codegymer}/edit', 'CodegymerController@edit');
// Route::patch('/codegymer/{codegymer}', 'CodegymerController@update');
// Route::delete('/codegymer/{codegymer}', 'CodegymerController@destroy');
Route::resource('codegymer', 'CodegymerController');

Route::get('/customers', 'CustomerController@index');
Route::post('/customers/edit', 'CustomerController@edit')->name('customers.edit');
Route::post('/customers/add', 'CustomerController@add')->name('customers.add');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
