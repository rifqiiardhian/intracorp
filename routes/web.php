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

// User Page
Route::get('/', 'HomeController@index');
Route::get('/about-us', 'AboutController@index');
Route::get('/our-works', 'WorksController@index');
Route::get('/our-works/detail', 'WorksController@detail');
Route::get('/contact-us', 'ContactController@index');

// Authentication
Route::get('/auth/login', 'AuthController@login');
Route::post('/auth/login/check', 'AuthController@check');
Route::get('/a/logout', 'AuthController@logout');

//Admin
// Dashboard
Route::get('/a/dashboard', 'admin\HomeController@index');
// Profile
Route::get('/a/admin/profile', 'admin\ProfileController@index');
Route::get('/a/admin/password', 'admin\ProfileController@password');
Route::post('/a/admin/profile/update', 'admin\ProfileController@update');
Route::post('/a/admin/password/update', 'admin\ProfileController@update_password');
// Website Profile
Route::get('/a/website-profile', 'admin\WebProfileController@index');
Route::post('/a/website-profile/update', 'admin\WebProfileController@update');
// Greetings
Route::get('/a/greeting', 'admin\GreetingController@index');
Route::post('/a/greeting/update', 'admin\GreetingController@update');
// Contacts
Route::get('/a/contact', 'admin\ContactController@index');
Route::post('/a/contact/update/phone', 'admin\ContactController@updatephone');
Route::post('/a/contact/update/whatsapp', 'admin\ContactController@updatewhatsapp');
Route::post('/a/contact/update/instagram', 'admin\ContactController@updateinstagram');
Route::post('/a/contact/update/email', 'admin\ContactController@updatemail');
// Services
Route::get('/a/service', 'admin\ServiceController@index');
Route::get('/a/service/add', 'admin\ServiceController@add');
Route::post('/a/service/save', 'admin\ServiceController@save');
Route::get('/a/service/edit', 'admin\ServiceController@edit');
Route::post('/a/service/update', 'admin\ServiceController@update');
Route::post('/a/service/delete', 'admin\ServiceController@delete');
// Website Logo
Route::get('/a/website-logo', 'admin\LogoController@index');
Route::post('/a/website-logo/update', 'admin\LogoController@update');
