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
    Route::post('/contato', 'SiteController@send');
    Route::get('/cart', 'SiteController@cart');
    Route::get('/checkout', 'SiteController@checkout');
    Route::get('/obrigado', 'SiteController@thanks');
    Route::get('/painel', 'SiteController@painel');
    Route::get('/pedidos', 'SiteController@orders');

});


Route::group(['namespace' => 'System', 'middleware' => ['auth', 'is_customer'], 'prefix' => 'sistema'], function() {
    Route::get('/', 'SystemController@dashboard');
});

Route::group(['middleware' => ['auth', 'is_customer'], 'prefix' => 'sistema'], function() {
    require('web/paymentMethod.php');
    require('web/category.php');
    require('web/status.php');
    require('web/products.php');
    
});

Auth::routes(['verify' => true]);
Route::get('/home', 'HomeController@index')->name('home');
