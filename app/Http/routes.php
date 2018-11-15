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

Route::get('/', function () {
    return view('welcome');
});

// Route:: - фасад
// get - метод, який відповідає HTTP запиту, для якого ми формуємо наш майбутній маршрут (get, post, put, delete, patch, options)

Route::get('/page', function () {
    return view('page');
    //echo "Hello";
    //var_dump($_ENV);
    //var_dump(config('app'));
    //var_dump(Config::get('app'));
});

// маршрут для методу POST
Route::post('/comments', function () {
    var_dump($_POST);
});

// match дозволяє оборобити різні типи запитів
//Route::match(['get', 'post'], '/comments', function () {
//    var_dump($_POST);
//});

// створення маршруту для всіх типів запитів
//Route::any('/comments', function () {
//    var_dump($_POST);
//});