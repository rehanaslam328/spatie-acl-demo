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




  Route::get('/admin',function(){
    return view('dashboard');
  })->name('admin');

  Route::get('/loginuser',function(){
    return view('dashboard');
  })->name('users');



// Role Routes
Route::get('/role/create','Admin\RoleController@create');
Route::post('/role/save','Admin\RoleController@store');
Route::get('/role','Admin\RoleController@index');
Route::get('/role/show/{id}','Admin\RoleController@show');
Route::get('/role/{id}/edit','Admin\RoleController@edit');
Route::post('/role/update','Admin\RoleController@update');
Route::get('/role/{id}/delete','Admin\RoleController@destroy');

// User


Route::get('/user/create','Admin\UserController@create');
Route::post('/user/save','Admin\UserController@store');
Route::get('/user','Admin\UserController@index');
Route::get('/user/show/{id}','Admin\UserController@show');
Route::get('/user/{id}/edit','Admin\UserController@edit');
Route::post('/user/update','Admin\UserController@update');
Route::get('/user/{id}/delete','Admin\UserController@destroy');

// User-permissions
Route::get('/user-permission/create','Admin\UserPermissionController@create');
Route::post('/user-permission/save','Admin\UserPermissionController@store');
Route::get('/user-permission','Admin\UserPermissionController@index');
Route::get('/user-permission/show/{id}','Admin\UserPermissionController@show');
Route::get('/user-permission/{id}/edit','Admin\UserPermissionController@edit');
Route::post('/user-permission/update','Admin\UserPermissionController@update');
Route::get('/user-permission/{id}/delete','Admin\UserPermissionController@destroy');







Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
