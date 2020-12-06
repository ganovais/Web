<?php

Route::group(['namespace' => 'Clients'], function() {

    Route::resource('clients', 'ClientController');
    
});