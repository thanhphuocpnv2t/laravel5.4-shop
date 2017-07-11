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

/* Front end */

Route::get('/', array('as'=> 'index','uses' => 'Frontend\IndexController@index'));
Route::get('/login', array('as'=> 'login','uses' => 'Frontend\IndexController@login'));
Route::get('/register', array('as'=> 'register','uses' => 'Frontend\IndexController@register'));
Route::get('/product/detail/{id}', array('as'=> 'detail','uses' => 'Frontend\ProductController@detail'));
Route::get('/product/compare/{id_1}/{id_2}', array('as'=> 'compare','uses' => 'Frontend\ProductController@compare'));
Route::get('/user/wishlist', array('as'=> 'wishlist','uses' => 'Frontend\UserController@wishlist'));
Route::get('/shopping_cart', array('as'=> 'wishlist','uses' => 'Frontend\UserController@shopping_cart'));
Route::get('/user/dashboard', array('as'=> 'dashboard','uses' => 'Frontend\UserController@dashboard'));
Route::get('/sitemap', array('as'=> 'sitemap','uses' => 'Frontend\IndexController@sitemap'));
Route::get('/contact_us', array('as'=> 'contact_us','uses' => 'Frontend\IndexController@contact_us'));
Route::get('/about_us', array('as'=> 'about_us','uses' => 'Frontend\IndexController@about_us'));
Route::get('/blog', array('as'=> 'blog','uses' => 'Frontend\BlogController@index'));
Route::get('/blog/detail', array('as'=> 'blog','uses' => 'Frontend\BlogController@detail'));
Route::get('/error', array('as'=> 'error','uses' => 'Frontend\ErrorController@index'));
Route::get('/delivery', array('as'=> 'delivery','uses' => 'Frontend\IndexController@delivery'));





/* Back end */
Route::get('/dashboard', array('as'=> 'dashboard', 'uses' => 'Backend\AdminController@index'));
Route::get('/dashboard/signin', array('as'=> 'dashboard', 'uses' => 'Backend\AdminController@signin'));
Route::get('/dashboard/signup', array('as'=> 'dashboard', 'uses' => 'Backend\AdminController@signup'));
Route::get('/dashboard/logout', array('as'=> 'dashboard', 'uses' => 'Backend\AdminController@logout'));
Route::get('/dashboard/lockscreen', array('as'=> 'dashboard', 'uses' => 'Backend\AdminController@lockscreen'));
Route::get('/dashboard/lost-password', array('as'=> 'admin', 'uses' => 'Backend\IndexController@lostpassword'));
Route::get('/dashboard/product', array('as'=> 'product', 'uses' => 'Backend\ProductController@index'));
Route::get('/dashboard/product/add', array('as'=> 'product', 'uses' => 'Backend\ProductController@add'));
// Banner
Route::get('/dashboard/banner/add', array('as'=> 'banner', 'uses' => 'Backend\BannerController@add'));
Route::get('/dashboard/banner', array('as'=> 'banner', 'uses' => 'Backend\BannerController@index'));
// Categories
Route::get('/dashboard/category/add', array('as'=>'category','uses'=>'Backend\CategoryController@add'));
Route::get('/dashboard/category', array('as'=>'category','uses'=>'Backend\CategoryController@index'));
Route::post('/dashboard/category', array('as'=>'category','uses'=>'Backend\CategoryController@store'));
Route::put('/dashboard/category/edit/{id}', array('as'=>'category','uses'=>'Backend\CategoryController@edit'));
Route::get('/dashboard/category/view/{id}', array('as'=>'category','uses'=>'Backend\CategoryController@view'));

