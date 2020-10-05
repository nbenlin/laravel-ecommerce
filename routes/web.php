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

Route::get('/', 'HomepageController@index')->name('homepage');

Route::get('/kategorie/{slug_categoryname}', 'CategoryController@index')->name('categories');

Route::get('/produkt/{slug_productname}', 'ProductController@index')->name('product');

Route::group(['prefix' => 'user'], function() {
    Route::get('/logowania', 'UserController@login_form')->name('user.login');
    Route::get('/zarejestruj', 'UserController@register_form')->name('user.register');
});

Route::get('/koszyk', 'CartController@index')->name('cart');

Route::get('/zamowienia', 'OrderController@index')->name('orders');
Route::get('/zamowienie/{id}','OrderController@detail')->name('order'); 

Route::get('/platnosc', 'PaymentController@index')->name('payment');



