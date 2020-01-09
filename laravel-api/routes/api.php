<?php

use App\Cart;
use App\Product;
use Illuminate\Http\Request;

Route::group(['namespace' => 'Api'], function () {
    Route::get('/products', 'ProductsController@index');
    Route::get('/products/{product}', 'ProductsController@show');

    Route::get('/cart', 'ProductsCartController@index');
    Route::post('/cart', 'ProductsCartController@store');
    Route::delete('/cart/{productId}', 'ProductsCartController@destroy');
    Route::delete('/cart', 'ProductsCartController@destroyAll');
});