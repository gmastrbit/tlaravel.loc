<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;

class Core extends Controller
{
    protected static $articles;

    // у конструкторі можна визначити список посередників
    public function __construct()
    {
        // $this->middleware('mymiddle');
    }

    public static function addArticles($array) {
        return self::$articles[] = $array;
    }

    // return list materials
    public function getArticles() {

        // виведення всіх записів із таблиці get()
        // $articles = DB::table('articles')->get();

        // виведення лише першого запису із таблиці first()
        // $articles = DB::table('articles')->first();

        // виведення інформації по конкретному полю value()
        // $articles = DB::table('articles')->value('name');

        // вибрати дані порціями chunk()
//        DB::table('articles')->chunk(2, function ($articles) {
//            foreach ($articles as $article) {
//                Core::addArticles($article);
//            }
//        });

        // вибрати всі записи по визначеному полю
        // $articles = DB::table('articles')->pluck('name');

        // повертає кількість записів у певній таблиці
        // $articles = DB::table('articles')->count('name');

        // вибирає максимальне значення певного поля
        // $articles = DB::table('articles')->max('id');

        // вибірка даних
        // $articles = DB::table('articles')->select('name', 'id', 'text')->get();

        // вибірка лише унікальних значень
        // $articles = DB::table('articles')->distinct()->select('name')->get();

        // $query = DB::table('articles')->select('name');
        // додає нові поля в майбутній SQL запит по вибірці даних
        // $articles = $query->addSelect('text AS fullText')->get();

        // додаємо умову
        // $articles = DB::table('articles')->select('text AS fullText')->where('id', '=', 5)->get();

        // додаємо декілька умов
//        $articles = DB::table('articles')->select('name', 'text AS fullText')
//            ->where('id', '>', 5)
//            ->where('name', 'like', 'test%', 'or')
//            ->get();

        // масив умов
//        $articles = DB::table('articles')->select('name', 'text AS fullText')
//            ->where([
//                ['id', '>', 5],
//                ['name', 'like', 'test%', 'or']
//            ])
//            ->get();

        // чи orWhere
//        $articles = DB::table('articles')->select('name', 'text AS fullText')
//            ->where('id', '>', 5)
//            ->Where('name', 'like', 'test%', 'or')
//            ->orWhere('id', '<', 2)
//            ->get();

        // between
        // $articles = DB::table('articles')->whereBetween('id', [1, 5])->get();

        // not between
        // $articles = DB::table('articles')->whereNotBetween('id', [1, 5])->get();

        // in
        // $articles = DB::table('articles')->whereIn('id', [1, 2, 3, 5])->get();

        // not in
        // $articles = DB::table('articles')->whereNotIn('id', [1, 2, 3, 5])->get();

        // групування
        // $articles = DB::table('articles')->groupBy('name')->get();

        // limit, skip щоб пропустити певну кількість записів (тобто починаючи з 2)
        // $articles = DB::table('articles')->take(4)->skip(2)->get();

        // вставка в БД insert
//        DB::table('articles')->insert([
//            ['name' => 'Test2', 'text' => 'hello'],
//            ['name' => 'Test3', 'text' => 'hello world']
//        ]);

        // повертає ідентифікатор останнього доданого запиту
        // $result = DB::table('articles')->insertGetId(['name' => 'Test2', 'text' => 'hello']);
        // dump($result);

        // оновлення даних
        // $result = DB::table('articles')->where('id', 1)->update(['name' => 'hello WORLD1']);

        // видалення даних
        // $result = DB::table('articles')->where('id', 1)->delete();
        // dump($result);

        // left join
        // LEFT JOIN 'articles' ON user.id = articles.id
//        $users = DB::table('users')
//            ->leftJoin('articles', 'users.id', '=', 'posts.user_id')
//            ->select('')
//            ->get();

        // increment() для збільшення значення певного поля
        // decrement() для зменшення значення певного поля

        // union($query) для об'єднання

        // DB::table('articles')->increment('name', 5);

        $articles = DB::table('articles')->get();
        dump($articles);
//        dump(self::$articles);
    }

    // return material
    public function getArticle($id) {
        echo 'Hello';
    }
}
