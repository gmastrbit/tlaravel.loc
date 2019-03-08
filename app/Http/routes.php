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
//    Route::auth();

//    Route::get('/home', 'HomeController@index');
});

Route::group(['middleware' => 'web'], function(){
//    Route::get('/login', ['uses' => 'Auth\MyAuthController@showLogin']);
//    Route::post('/login', ['uses' => 'Auth\MyAuthController@authenticate']);
    Route::auth();
});

// самописаний код, 29 урок:

// реєстрація стандартних маршрутів
//Route::auth();

// prefix - префікс admin
// web підключаємо перед auth, тому що посередники передають управління по ланцюжку



// auth.basic - реалізація базової аутентифікації (як при httpwd)
Route::group(['prefix' => 'admin', 'middleware' => ['web', 'auth']], function (){
    Route::get('/', ['uses' => 'Admin\AdminController@show', 'as' => 'admin_index']);

    Route::get('/add/post', ['uses' => 'Admin\AdminPostController@show', 'as' => 'admin_add_post']);
    Route::post('/add/post', ['uses' => 'Admin\AdminPostController@create', 'as' => 'admin_add_post_p']);

    Route::get('/update/post/{id}', ['uses' => 'Admin\AdminUpdatePostController@show', 'as' => 'admin_add_post']);
    Route::post('/update/post', ['uses' => 'Admin\AdminUpdatePostController@create', 'as' => 'admin_update_post_p']);
});