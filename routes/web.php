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

Route::get('/', function () {
    return view('welcome');
});

Route::get('login/facebook', 'SocialiteController@redirectToProvider');
Route::get('login/facebook/callback', 'SocialiteController@handleProviderCallback');

Route::get('login/google', 'SocialiteController@redirectToProviderGoogle');
Route::get('login/google/callback', 'SocialiteController@handleProviderCallbackGoogle');
