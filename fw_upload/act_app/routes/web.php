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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', 'WelcomeController@index')->name('index');

// 

Route::get('/home', 'HomeController@index')->name('home');


Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function(){

    Route::resource('/users', 'UsersController', ['except' => ['show','create','store']]);

    Route::resource('/pages','ArticlesController');

    Route::resource('/category','CategoryController');

    Route::resource('/items','ItemsController');

    Route::post('/pages/search_articles','ArticlesController@search_articles')->name('search_articles');
    
    //Route::post('/pages/order_down','PagesController@order_down')->name('order_down');

    //Route::post('/pages/order_up','PagesController@order_up')->name('order_up');
   
    //Route::resource('/pages','PagesController');

    Route::resource('/menus','MenusController');

    //Route::resource('/no-image-articles','NoImageArticlesController');

});


Route::get('/{menu}/{page}', 'WelcomeController@pages')->name('pages');

Route::get('/{page}', 'WelcomeController@page')->name('page');

Route::get('/{menu}/{page}/{item}', 'WelcomeController@pagex')->name('pagex');

