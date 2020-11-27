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

Route::post('/dados', 'HomeController@save');
Route::get('accepted/{id}', 'HomeController@accepted');
Route::get('dado/{id}', 'HomeController@dado');
Route::post('feedback/{id}', 'HomeController@feedback');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
