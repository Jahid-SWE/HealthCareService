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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/',[
   'uses' => 'HelthCareController@index',
    'as' => '/'
]);
Route::get('/shop',[
    'uses' => 'HelthCareController@shop',
    'as' => 'shop'
]);
Route::get('/blog',[
    'uses' => 'HelthCareController@blog',
    'as' => 'blog'
]);
Route::get('/contact-us',[
    'uses' => 'HelthCareController@contactUs',
    'as' => 'contact-us'
]);
Route::get('/about-us',[
    'uses' => 'HelthCareController@aboutUs',
    'as' => 'about-us'
]);
Route::get('/cart',[
    'uses' => 'HelthCareController@cart',
    'as' => 'cart'
]);
Route::get('/check-out',[
    'uses' => 'HelthCareController@CheckOut',
    'as' => 'check-out'
]);
Route::get('/product-details-page',[
    'uses' => 'HelthCareController@productDetailsPage',
    'as' => 'product-details-page'
]);
Route::get('/single-page',[
    'uses' => 'HelthCareController@singlePage',
    'as' => 'single-page'
]);
