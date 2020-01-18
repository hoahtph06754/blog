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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('admin','UserController@index')->name('index');
Route::resources([
    'users' => 'UserController',
    'categories' => 'CategoryController',
    'posts' => 'PostController',
    'comments' => 'CommentController',
    'contacts' => 'ContactController',
    'products' => 'ProductController',
    'reviews' => 'ReviewController',
    'settings' => 'SettingController',
    'sliders' => 'SliderController',
    'orders' => 'OrderController',
    'order_details' => 'OrderdetailController'
]);
