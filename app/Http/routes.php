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

// закоментовано для створення посилання на головну сторінку
// Route::get('/', function () {
//    return view('welcome');
// });

// створення посилання на головну сторінку
Route::get('/', ['as' => 'home', function () {
    return view('welcome');
}]);

Route::get('/article/{id}', ['as' => 'article', function ($id) {
    // return view('welcome');
    echo $id;
}]);

// Route:: - фасад
// get - метод, який відповідає HTTP запиту, для якого ми формуємо наш майбутній маршрут (get, post, put, delete, patch, options)

// Route::get('/page', function () {
// Route::get('/page/{id}/{cat}', function ($id, $cat) {
// Route::get('/page/{id?}', function ($id = null) {       // якщо параметр не обов'язковий, то треба вказати параметр по замовчуванню
// Route::get('/page/{id}', function ($id ) {       // формування умови для 1 параметра
Route::get('/page/{cat}/{id}', function ($id) {       // формування умови для 2 параметрів
    //return view('page');

    //echo "Hello";
    //var_dump($_ENV);
    //var_dump(config('app'));
    //var_dump(Config::get('app'));

    echo $id;
//});
// перевірка на задоволення умови
//})->where('id', '[0-9]+'); // перевірка на число (якщо одна перевірка)

// id має бути числом, cat має бути лише рядком
//})->where(['id' => '[0-9]+', 'cat' => '[A-Za-z]+']); // перевірки (якщо багато параметрів, які треба перевіряти)
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

// групування маршрутів
// для того, щоб через admin/page/create отримати page/create
Route::group(['prefix' => 'admin'], function (){

    Route::get('page/create', function (){
//        echo 'page/create <br><br>';
        // відображення посилання на головну сторінку
//        echo route('home'); // вивести посилання на певний роут (на головну сторінку)
//        return redirect()->route('home'); // редірект на головну сторінку
//        return redirect()->route('article', array('id' => 25)); // редірект на головну сторінку
        $route = Route::current();
        echo $route->getName();

    })->name('createpage'); // ще один спосіб визначення імені для маршрута

    Route::get('page/edit', function (){
        echo 'page/edit';
    });

});