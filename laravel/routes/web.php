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

Route::group(['namespace' => 'Site'], function() {

    Route::get('/', 'SiteController@index');
    Route::get('/produtos', 'SiteController@products');
    Route::get('/contato', 'SiteController@contact');
    Route::get('/produto/{slug}', 'SiteController@detail');
    Route::get('/login', 'SiteController@login');
    Route::get('wishlist', 'SiteController@wishlist');

});


Route::group(['namespace' => 'System', 'middleware' => 'auth', 'prefix' => 'sistema'], function() {
    Route::get('/', 'SystemController@dashboard');
});

Route::group(['middleware' => 'auth', 'prefix' => 'sistema'], function() {
    require('web/paymentMethod.php');
});

Auth::routes(['verify' => true]);
Route::get('/home', 'HomeController@index')->name('home');
