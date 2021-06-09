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

Route::group(['namespace'=>'Admin'], function(){
    Route::group(['prefix'=>'login', 'middleware'=>'CheckLogedIn'], function(){
        Route::get('/','LoginController@getLogin');
        Route::post('/','LoginController@postLogin');
    });
});

//backend
Route::group(['namespace'=>'backend'], function(){
    Route::get('logout', 'HomeController@getLogout');

    Route::group(['prefix'=>'admin', 'middleware'=>'CheckLogedOut'], function(){
        Route::get('home','HomeController@index');

        Route::group(['prefix'=>'category'], function(){
            Route::get('/', 'CategoriesController@getCategory');

            Route::get('add', 'CategoriesController@getAddCategory');
            Route::post('add', 'CategoriesController@postAddCategory');
        
            Route::get('edit/{id}', 'CategoriesController@getEditCategory');
            Route::post('edit/{id}', 'CategoriesController@postEditCategory');

            Route::get('delete/{id}', 'CategoriesController@getDeleteCategory');
        });

        Route::group(['prefix'=>'food'], function(){
            Route::get('/', 'FoodController@getFood');

            Route::get('add', 'FoodController@getAddFood');
            Route::post('add', 'FoodController@postAddFood');
        
            Route::get('edit/{id}', 'FoodController@getEditFood');
            Route::post('edit/{id}', 'FoodController@postEditFood');

            Route::get('delete/{id}', 'FoodController@getDeleteFood');
        });
    });
});

//front end
Route::group(['namespace'=>'frontend'], function(){
    Route::get('/', 'IndexController@index');
    Route::group(['prefix'=>'category'], function(){
        Route::get('/', 'IndexController@getCategory');

        Route::get('food/{id}', 'IndexController@getFoodCategory');
    });
    Route::get('food', 'IndexController@getFood');

    Route::get('search', 'IndexController@getSearch');
});