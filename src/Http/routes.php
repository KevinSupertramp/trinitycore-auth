<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Authentication Routes...
Route::get('/login', '\ThibaudDT\LaravelTrinityCoreAuth\Http\Controllers\Auth\LoginController@showLoginForm')->name('login');
Route::post('/login', '\ThibaudDT\LaravelTrinityCoreAuth\Http\Controllers\Auth\LoginController@login');
Route::post('/logout', '\ThibaudDT\LaravelTrinityCoreAuth\Http\Controllers\Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('/register', '\ThibaudDT\LaravelTrinityCoreAuth\Http\Controllers\Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('/register', '\ThibaudDT\LaravelTrinityCoreAuth\Http\Controllers\Auth\RegisterController@register');

// Password Reset Routes...

Route::post("password/email", '\ThibaudDT\LaravelTrinityCoreAuth\Http\Controllers\Auth\ForgotPasswordController@sendResetLinkEmail');
Route::get("password/reset", '\ThibaudDT\LaravelTrinityCoreAuth\Http\Controllers\Auth\ForgotPasswordController@showLinkRequestForm')->name('reset');
Route::post("password/reset", '\ThibaudDT\LaravelTrinityCoreAuth\Http\Controllers\Auth\ResetPasswordController@reset');
Route::get("password/reset/{token?}", '\ThibaudDT\LaravelTrinityCoreAuth\Http\Controllers\Auth\ResetPasswordController@showResetForm');