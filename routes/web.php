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

Route::get('/', 'HomeController@index')->name('index');
Route::get('/posts', 'HomeController@index')->name('guest.posts.index');
Route::get('/posts/{slug}', 'HomeController@show')->name('guest.posts.show');

Auth::routes();

Route::prefix('admin')
->namespace('Admin')
->middleware('auth')
->group(function () {
  Route::get('/', 'HomeController@index')->name('home');
  Route::resource('/post', 'PostController');
});
