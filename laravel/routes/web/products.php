<?php

Route::group(['namespace' => 'Products'], function() {

    Route::resource('products', 'ProductController');
    
});