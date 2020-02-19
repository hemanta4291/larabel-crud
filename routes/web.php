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

Route::get('/', 'HomeController@index');

//user 
Route::get('/adduser', 'HomeController@addUser')->name('adduser');
Route::post('/usersave', 'HomeController@saveUser')->name('userSave');
Route::get('/listuser', 'HomeController@showUser')->name('showUser');
Route::get('/edituser/{id}', 'HomeController@editUser');
Route::get('/deleteuser/{id}', 'HomeController@deleteUser');
Route::post('/userUpdate', 'HomeController@updateUser')->name('userUpdate');

