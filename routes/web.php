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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route::get('/users', 'HomeController@users')->name('users');

Route::get('/company', 'CompanyController@index')->name('company');

Route::group(['prefix' => 'admin'], function(){

    Route::resource('user', 'UserController');

    Route::resource('company', 'CompanyController');
});
