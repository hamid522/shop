<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//landing page
Route::get('/','LandingPageController@index')->name('landing-page');

// products
Route::get('/products','ShopController@index')->name('shop');
Route::get('/products/{products}','ShopController@show')->name('shop.show');
