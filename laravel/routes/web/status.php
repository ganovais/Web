<?php

Route::group(['namespace' => 'Status'], function() {

    Route::resource('status', 'StatusController');
    
});