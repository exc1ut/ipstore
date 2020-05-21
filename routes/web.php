<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'ProductsController@index');
Route::resource('product', 'ProductsController');
Route::get('/search', 'ProductsController@search');
Route::get('category/{id}', 'CategoriesController@view');
Route::get('/buy/{id}','ProductsController@buy');
Route::get('/card','CardsController@index');
Route::get('/add/{id}','CardsController@add');
Route::get('/delete/{id}','CardsController@delete');
Route::get('/checkout','CardsController@checkout');
Route::get('/buyall', function () {
    return view('payment');
});
Route::get('/seller/{id}','ProductsController@seller');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
