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
//Route::get('/', ['as' => 'home', function () {
//    return view('welcome');
//}]);

// вказання конкретного посередника
//Route::get('/', ['as' => 'home', 'middleware' => 'mymiddle', function () {
//    return view('welcome');
//}]);

// приклад роботи з посередником auth
// явно вказали назву посередника у параметрах
// Route::get('/', ['as' => 'home', 'middleware' => 'auth', 'uses' => 'Admin\IndexController@show']); // перенаправить на сторінку login

 Route::get('/', ['as' => 'home', 'uses' => 'Admin\IndexController@show']);

// Route::get('/about', 'FirstController@show'); // вказуємо контролер для обробки запиту методом get
// після @ вказується метод для відображення

//Route::get('/about/{id?}', 'FirstController@show'); // передача параметрів

Route::get('/about',['uses' => 'Admin\AboutController@show', 'as' => 'about']); // передача параметрів

// іменування маршрута
Route::get('articles/', ['uses' => 'Admin\Core@getArticles', 'as' => 'articles']);
//Route::get('article/{id}', ['uses' => 'Admin\Core@getArticle', 'as' => 'article']);

// для маршрута визначаємо посередника
//Route::get('article/{page}', ['uses' => 'Admin\Core@getArticle', 'as' => 'article', 'middleware' => 'mymiddle']);

// middleware додали в масив посередників, які будуть автоматично відпрацьовувати для кожного запиту
// Route::get('article/{page}', ['uses' => 'Admin\Core@getArticle', 'as' => 'article']);

// вказання посередника за допомогою метода middleware()
// Route::get('article/{page}', ['uses' => 'Admin\Core@getArticle', 'as' => 'article'])->middleware(['mymiddle']);

//Route::get('article/{page}', ['uses' => 'Admin\Core@getArticle', 'as' => 'article']);

// передача параметрів в клас посередника
Route::get('article/{id}', ['middleware' => 'mymiddle:home','uses' => 'Admin\Core@getArticle', 'as' => 'article']);

// RESTful
// list pages
//Route::resource('/pages', 'Admin\CoreResource'); // для всіх методів
// Route::resource('/pages', 'Admin\CoreResource', ['only' => ['index', 'show']]); // only - створити лише деякі методи
// except - вказати методи, які будуть виключені з ResourceController

// формування власного маршруту
// Roure::get('pages/add', 'Admin\CoreResource@add');

// формування одного контролера для маршрутів
Route::controller('/pages', 'PagesController');

// формування групи посередників
Route::group(['middleware' => ['web']], function (){
    //
    //
    //
});