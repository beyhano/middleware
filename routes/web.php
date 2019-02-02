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
Route::get('/adminloginform', 'AdminLoginController@index')->name('admin.login.form');
Route::get('/adminregisterform', 'AdminController@index')->name('admin.register.form');

Route::post('/adminregisterform', 'AdminController@store')->name('admin.register');
Route::post('/adminloginform', 'AdminLoginController@adminlogin')->name('admin.login');
Route::post('/admincikisi', 'AdminController@admincikis')->name('admin.logout');


