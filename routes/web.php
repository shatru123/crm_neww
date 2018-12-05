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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', 'AdminController@index')
    ->middleware('is_admin')
    ->name('admin');


Route::post('/val','VehicleController@Validation');

Route::group(['middleware'=>'is_admin'], function(){
    Route::resource('admin/drivers', 'DriverController');

});

Route::group(['middleware'=>'is_admin'], function(){
    Route::resource('admin/vechicles', 'VehicleController');
    Route::resource('admin/leads', 'LeadController');
    Route::resource('admin/products', 'ProductController');
    Route::resource('admin/brands', 'BrandController');

});




