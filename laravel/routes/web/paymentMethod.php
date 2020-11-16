<?php

Route::group(['namespace' => 'PaymentMethods'], function() {
    Route::get('payment-methods', 'PaymentMethodController@list');
    Route::get('payment-methods/create/{id}', 'PaymentMethodController@create');

    Route::get('payment-methods/create', 'PaymentMethodController@create');
});