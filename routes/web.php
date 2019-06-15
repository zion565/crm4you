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

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::get('/', 'MloginController@index');
Route::get('/mlogin', 'MloginController@index');
//Route::get('/customers', 'DashboardController@customer');
//Route::get('/customers', 'DashboardController@customer');
//Route::get('/mregister', 'MregisterController@index');
Route::resource('/customers', 'CustomerController');
Route::post('/customers/store', 'CustomerController@store');
Route::get('/customers/delete/{id}', 'CustomerController@destroy');

Route::resource('/customer_item', 'customerItemController');
Route::post('/customer_item/store', 'customerItemController@store');
Route::get('/customer_item/delete/{id}', 'customerItemController@destroy');
