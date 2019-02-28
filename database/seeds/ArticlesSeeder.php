<?php

use Illuminate\Database\Seeder;
use App\Article;

class ArticlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    // виконується тоді, коли ми запускаємо механізм посіву даних
    public function run()
    {
        //

        // спосіб 1
        // призначений для вставки даних в БД
        DB::insert('INSERT INTO `articles` (`name`, `text`, `img`) VALUES (?,?,?)', [
            'Blog post',
            '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>',
            'pic1.jpg'
        ]);

        // спосіб 2
        // метод table повертає об'єкт пустого SQL-запиту для певноъ таблиці. Використовується конструктор запитів
        DB::table('articles')->insert([
            [
                'name' => 'Sample blog post',
                'text' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

<h2>Title h2</h2>

<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',
                'img' => 'pic2.jpg'
            ],

            [
                'name' => 'Sample blog post number 2',
                'text' => '<p>2 Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

<h2>2 Title h2</h2>

<p>2 Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',
                'img' => 'pic3.jpg'
            ]
        ]);

        // 3 спосіб з використанням моделі
        Article::create([
            'name' => 'Sample blog post 3',
            'text' => 'Hello world',
            'img' => 'pic3.jpg'
        ]);
    }
}
