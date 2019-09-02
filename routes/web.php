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

// Before login

Route::get('/', 'MainController@home');
Route::get('/about', 'MainController@about');


// Login - USER

Route::get('/login', 'LoginUserController@login');
Route::get('/register', 'LoginUserController@register');
Route::post('/register', 'LoginUserController@registerPost');


// After Login - USER

Route::get('/myuniverse', 'UserController@home');