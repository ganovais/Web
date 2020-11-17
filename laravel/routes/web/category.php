<?php

Route::group(['namespace' => 'Categories'], function() {

    Route::resource('categories', 'CategoryController');
    
});