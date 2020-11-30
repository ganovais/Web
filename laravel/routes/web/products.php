<?php

Route::group(['namespace' => 'Products'], function() {

    Route::post('/products/{id}', 'ProductController@update');
    Route::resource('products', 'ProductController');
    
});