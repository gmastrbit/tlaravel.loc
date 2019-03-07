<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', ['as' => 'home', 'uses' => 'Admin\IndexController@show']);

Route::get('/about', ['as' => 'about', 'uses' => 'Admin\AboutController@show']);

Route::get('/articles', ['as' => 'articles', 'uses' => 'Admin\Core@getArticles']);

Route::get('/article/{id}', ['as' => 'article', 'uses' => 'Admin\Core@getArticle']);

//Route::match(['get', 'post'], '/contact/{name?}', ['as' => 'contact', 'uses' => 'Admin\ContactController@show']);

Route::get('/contact', ['middleware' => ['auth'], 'uses' => 'Admin\ContactController@show', 'as' => 'contact']);

Route::post('/contact', ['uses' => 'Admin\ContactController@store']);

// автоматично згенерований код
Route::group(['middleware' => 'web'], function(){
    Route::auth();

//    Route::get('/home', 'HomeController@index');
});

// самописаний код, 29 урок:

// реєстрація стандартних маршрутів
//Route::auth();

// prefix - префікс admin
// web підключаємо перед auth, тому що посередники передають управління по ланцюжку
Route::group(['prefix' => 'admin', 'middleware' => ['web']], function (){
    Route::get('/', ['uses' => 'Admin\AdminController@show', 'as' => 'admin_index']);
    Route::get('/add/post', ['uses' => 'Admin\AdminPostController@create', 'as' => 'admin_add_post']);
});