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
Route::get('/products/{product}', ['uses' => 'SiteController@detail', 'as' => 'detail']);
Route::get('/care', ['uses' => 'SiteController@care', 'as' => 'care']);
//Route::get('/cart', ['uses' => 'SiteController@cart', 'as' => 'cart']);
Route::post('/add/{product}', ['uses' => 'SiteController@add', 'as' => 'add']);
Route::get('/shop', ['uses' => 'SiteController@shop', 'as' => 'shop']);
Route::post('/shop', ['uses' => 'SiteController@shop', 'as' => 'shop']);
Route::get('/blog', ['uses' => 'SiteController@blog', 'as' => 'blog']);
Route::get('/about', ['uses' => 'SiteController@about', 'as' => 'about']);
Route::get('/contact', ['uses' => 'SiteController@contact', 'as' => 'contact']);
Route::get('/tag/{tag}', ['uses' => 'SiteController@tag', 'as' => 'tag']);
Route::post ('/search', ['uses' => 'SiteController@search', 'as' => 'search']);
Route::post ('/message', ['uses' => 'MessageController@message', 'as' => 'message']);
Route::get('/checkout', ['uses' => 'SiteController@checkout', 'as' => 'checkout']);

Route::get('/en/', ['uses' => 'En\SiteController@index', 'as' => 'en.index']);
Route::get('/en/products/{product}', ['uses' => 'En\SiteController@detail', 'as' => 'en.detail']);
Route::get('/en/care', ['uses' => 'En\SiteController@care', 'as' => 'en.care']);
//Route::get('/cart', ['uses' => 'SiteController@cart', 'as' => 'cart']);
Route::post('/en/add/{product}', ['uses' => 'En\SiteController@add', 'as' => 'en.add']);
Route::get('/en/shop', ['uses' => 'En\SiteController@shop', 'as' => 'en.shop']);
Route::post('/en/shop', ['uses' => 'En\SiteController@shop', 'as' => 'en.shop']);
Route::get('/en/blog', ['uses' => 'En\SiteController@blog', 'as' => 'en.blog']);
Route::get('/en/about', ['uses' => 'En\SiteController@about', 'as' => 'en.about']);
Route::get('/en/contact', ['uses' => 'En\SiteController@contact', 'as' => 'en.contact']);
Route::get('/en/tag/{tag}', ['uses' => 'En\SiteController@tag', 'as' => 'en.tag']);
Route::post ('/en/search', ['uses' => 'En\SiteController@search', 'as' => 'en.search']);
Route::post ('/en/message', ['uses' => 'En\MessageController@message', 'as' => 'en.message']);



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::group(['prefix' => 'admin', 'middleware' => ['web', 'auth', 'auth.sidebar']], function () {

    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('/products', ['uses' => 'ProductController@index', 'as' => 'product.index']);
    Route::get('/products/create', ['uses' => 'ProductController@create', 'as' => 'product.create']);
    Route::get('/products/{product}/imageset', ['uses' => 'ProductController@imageset', 'as' => 'product.imageset']);
    Route::post('/products', ['uses' => 'ProductController@store', 'as' => 'product.store']);
    Route::get('/products/{product}/edit', ['uses' => 'ProductController@edit', 'as' => 'product.edit']);
    Route::delete('/products/{product}', ['uses' => 'ProductController@destroy', 'as' => 'product.destroy']);
    Route::patch('/products/{product}', ['uses' => 'ProductController@update', 'as' => 'product.update']);
    Route::post('/products/{product}/imageset', ['uses' => 'ProductController@imageUpload', 'as' => 'product.upload-image1']);

    Route::get('/tags', ['uses' => 'TagController@index', 'as' => 'tag.index']);
    Route::get('/tags/create', ['uses' => 'TagController@create', 'as' => 'tag.create']);
    Route::post('/tags', ['uses' => 'TagController@store', 'as' => 'tag.store']);
    Route::get('/tags/{tag}/edit', ['uses' => 'TagController@edit', 'as' => 'tag.edit']);
    Route::patch('/tags/{tag}', ['uses' => 'TagController@update', 'as' => 'tag.update']);

    Route::get('/users', ['uses' => 'UserController@index', 'as' => 'user.index']);
    Route::get('/users/create', ['uses' => 'UserController@create', 'as' => 'user.create']);
    Route::post('/users', ['uses' => 'UserController@store', 'as' => 'user.store']);
    Route::get('/users/{user}/edit', ['uses' => 'UserController@edit', 'as' => 'user.edit']);
    Route::delete('/users/{user}', ['uses' => 'UserController@destroy', 'as' => 'user.destroy']);
    Route::patch('/users/{user}', ['uses' => 'UserController@update', 'as' => 'user.update']);

    Route::get('/messages', ['uses' => 'MessageController@index', 'as' => 'message.index']);
    Route::get('/messages/{message}/read', ['uses' => 'MessageController@read', 'as' => 'message.read']);
    Route::delete('/messages/{message}', ['uses' => 'MessageController@destroy', 'as' => 'message.destroy']);

});


Route::group(['prefix' => 'member', 'middleware' => ['web', 'auth', 'auth.sidebar']], function () {

    Route::get('/home', 'HomeController@index')->name('home');
});