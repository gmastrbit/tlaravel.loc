<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;

// Надаємо доступ до класу Response
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Redirect;

class AboutController extends Controller
{
    //

    public function show()
    {
        if (view()->exists('default.about')){

            // повертаємо об'єкт класу Response
            //$view = view('default.about')->withTitle('Hello world')->render();
            //return (new Response($view))->header('Content-Type','newType');

            // можна повернути JSON рядок
            //return response()->json(['name' => 'hello', 'name1' => 'hello1']);

            // вибрати записи з БД
            // неіменовані мітки
            // $articles = DB::select('SELECT * FROM `articles` WHERE id = ?', [2]);

            // іменовані мітки
            // $articles = DB::select('SELECT * FROM `articles` WHERE id = :id', ['id' => 2]);

            // DB::insert('INSERT INTO `articles` (`name`, `text`) VALUES (?, ?)', ['test 1', 'TEXT']);
            // $result = DB::connection()->getPdo()->lastInsertId();

            // $result = DB::update('UPDATE `articles` SET `name` = ? WHERE `id` = ?', ['TEST 2', 6]);

            // $result = DB::delete('DELETE FROM `articles` WHERE `id` = ?', [6]);

            // statement для інших загальних запитів
            // DB::statement('DROP TABLE `articles`');

            // $articles = DB::select('SELECT * FROM `articles`');

            // dump($result);
            // dump($articles);

            // віддати файл на скачування
            //return response()->download('robots.txt', 'mytext.txt');

            // перенаправлення
            // return redirect('/');
            //return new RedirectResponse('/articles');

            $page = DB::select("SELECT `name`, `text` FROM `pages` WHERE `alias` = :alias", ['alias' => 'about']);

            return view('default.about')->withPage($page[0])->withTitle('About our company');
        }
        abort(404);
    }
}
