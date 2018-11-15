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

//Route::get('/', function () {
//    return view('welcome');
//});

// іменування маршрута
Route::get('/', ['as' => 'home', function () {
    return view('welcome');
}]);

// Route::get('/about', 'FirstController@show'); // вказуємо контролер для обробки запиту методом get
// після @ вказується метод для відображення

Route::get('/about/{id?}', 'FirstController@show'); // передача параметрів

// іменування маршрута
Route::get('articles/', ['uses' => 'Admin\Core@getArticles', 'as' => 'articles']);
Route::get('article/{id}', ['uses' => 'Admin\Core@getArticle', 'as' => 'article']);

// RESTful
// list pages
//Route::resource('/pages', 'Admin\CoreResource'); // для всіх методів
// Route::resource('/pages', 'Admin\CoreResource', ['only' => ['index', 'show']]); // only - створити лише деякі методи
// except - вказати методи, які будуть виключені з ResourceController

// формування власного маршруту
// Roure::get('pages/add', 'Admin\CoreResource@add');

// формування одного контролера для маршрутів
Route::controller('/pages', 'PagesController');