<?php

Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles','RoleController');
    Route::resource('users','UserController');
    Route::resource('products','ProductController');
    Route::get('customer','CustomerController@index')->name('getCustomerList');
    Route::get('customer/create','CustomerController@create')->name('customer.create');
    Route::get('customer/delete/{id}','CustomerController@destroy');
    Route::get('getCustomerData','CustomerController@getCustomerData')->name('getCustomerData');
    Route::Post('customer/store','CustomerController@store')->name('customer.store');
    Route::get('activities','ActivityController@index');
});
