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

Route::get('/', [
    'uses' => 'FrontendController@index',
    'as' => 'index'
]);

Route::get('/product/{id}', [
    'uses' => 'FrontendController@singleProduct',
    'as' => 'product.single'
]);

Route::get('/cart', [
    'uses' => 'ShoppingController@cart',
    'as' => 'cart'
]);

Route::post('/cart/add', [
    'uses' => 'ShoppingController@add_to_cart',
    'as' => 'cart.add'
]);

Route::get('/cart/delete/{id}', [
    'uses' => 'ShoppingController@cart_delete',
    'as' => 'cart.delete'
]);

Auth::routes();

Route::group(['middleware' => 'auth'], function(){
    Route::resource('products', 'ProductsController');
});

Route::get('/home', 'HomeController@index')->name('home');
