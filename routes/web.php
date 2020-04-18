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


Route::get('/profile', function () {
    return view('profile');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profile', 'ProfileController@index')->name('owner');

Route::get('/product', 'ProductController@index')->name('product');

Route::get('/client', 'ClientController@index')->name('client');

/**
 * Show Todo dashboard
 */
Route::get('/owner', 'OwnerController@index');
Route::get('/owner/create', 'OwnerController@create');
Route::post('/owner/store', 'OwnerController@store');
Route::get('/owner/{owner}/edit', 'OwnerController@edit');
Route::put('/owner/{owner}', 'OwnerController@update');
Route::get('/owner/{owner}/delete', 'OwnerController@delete');
//edit
//update
//delet

// multi auth routing
Route::get('/login/admin', 'Auth\LoginController@showAdminLoginForm');
Route::get('/login/client', 'Auth\LoginController@showClientLoginForm');
Route::get('/login/owner', 'Auth\LoginController@showOwnerLoginForm');

Route::get('/register/admin', 'Auth\RegisterController@showAdminRegisterForm');
Route::get('/register/client', 'Auth\RegisterController@showClientRegisterForm');
Route::get('/register/owner', 'Auth\RegisterController@showOwnerRegisterForm');


Route::post('/login/admin', 'Auth\LoginController@adminLogin');
Route::post('/login/client', 'Auth\LoginController@clientLogin');
Route::post('/login/owner', 'Auth\LoginController@ownerLogin');

Route::post('/register/admin', 'Auth\RegisterController@createAdmin');
Route::post('/register/client', 'Auth\RegisterController@createClient');
Route::post('/register/owner', 'Auth\RegisterController@createOwner');

Route::view('/home', 'home')->middleware('auth');
Route::view('/admin', 'admin');
Route::view('/client', 'client');
Route::view('/owner', 'owner');