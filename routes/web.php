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
    return view('site.index');
});*/

Auth::routes();



Route::get('/', ['uses' => 'SiteController@index', 'as' => 'index']);
Route::get('/shop', ['uses' => 'SiteController@shop', 'as' => 'shop']);
Route::get('/blog', ['uses' => 'SiteController@blog', 'as' => 'blog']);
Route::get('/about', ['uses' => 'SiteController@about', 'as' => 'about']);
Route::get('/contact', ['uses' => 'SiteController@contact', 'as' => 'contact']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::group(['prefix' => 'admin', 'middleware' => ['web', 'auth']], function () {

    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('/products', ['uses' => 'ProductController@index', 'as' => 'product.index']);
    Route::get('/products/create', ['uses' => 'ProductController@create', 'as' => 'product.create']);
    Route::post('/products', ['uses' => 'ProductController@store', 'as' => 'product.store']);
    Route::get('/products/{product}/edit', ['uses' => 'ProductController@edit', 'as' => 'product.edit']);
    Route::delete('/products/{product}', ['uses' => 'ProductController@destroy', 'as' => 'product.destroy']);
    Route::patch('/products/{product}', ['uses' => 'ProductController@update', 'as' => 'product.update']);
    Route::post('/products/{product}/edit', ['uses' => 'ProductController@imageUpload', 'as' => 'product.upload-image1']);

    Route::get('/tags', ['uses' => 'TagController@index', 'as' => 'tag.index']);
    Route::get('/tags/create', ['uses' => 'TagController@create', 'as' => 'tag.create']);
    Route::post('/tags', ['uses' => 'TagController@store', 'as' => 'tag.store']);
});
