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

Route::post('login', 'Auth\LoginController@login')->name('login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');
Route::get('/login', 'Auth\LoginController@showLoginForm')->name('user.showLogin');
Route::get('/register', 'Auth\RegisterController@showRegistrationForm')->name('user.showRegis');
Route::post('/register', 'Auth\RegisterController@register')->name('register');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/image/{location}/{filename}', 'GetController@getImage')->name('getImage');

Route::get('/admin/login', 'AdminController@showLoginForm')->name('admins.showLogin');
Route::post('/admin/login', 'AdminController@login')->name('admins.login');
Route::post('/admin/logout', 'AdminController@logout')->name('admins.logout');
Route::get('/admin/home', 'AdminHomeController@showHome')->name('admins.home');

Route::group(['middleware' => 'auth:admin'], function () {
    Route::get('/admin/home', 'AdminHomeController@showHome')->name('admins.home');

    Route::resource('admin/menus', 'MenuController');
});

Route::group(['middleware' => 'auth:web'], function () {
    Route::get('/user/home', 'HomeController@index')->name('users.home');

    Route::resource('user/orders', 'OrderController');
});
Route::get('/user/reservetable', 'OrderController@book')->name('users.book');