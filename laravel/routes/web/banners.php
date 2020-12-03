<?php

Route::group(['namespace' => 'Banners'], function() {

    Route::post('/banners/{id}', 'BannerController@update');
    Route::resource('banners', 'BannerController');
    
});