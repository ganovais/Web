<?php

Route::group(['namespace' => 'PaymentMethods'], function() {
    
    Route::resource('payment-methods', 'PaymentMethodController');

    // Route::get('payment-methods', 'PaymentMethodController@index');
    // Route::get('payment-methods/create', 'PaymentMethodController@create');
    // Route::post('payment-methods', 'PaymentMethodController@store');
    // Route::get('payment-methods/{id}', 'PaymentMethodController@show');
    // Route::get('payment-methods/{id}/edit', 'PaymentMethodController@edit');
    // Route::put('payment-methods/{id}', 'PaymentMethodController@update');
    // Route::delete('payment-methods/{id}', 'PaymentMethodController@destroy');

});