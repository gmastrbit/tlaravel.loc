<?php

namespace App\Http\Controllers\Admin;

use App\Article;
use App\Country;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;
use App\User;
use App\Role;

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
    public function getArticles(Request $request) {

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

//        $articles = DB::table('articles')->get();
//        dump($articles);
//        dump(self::$articles);

        // all() поверне колекцію моделей
//        $articles = Article::all();
//
//        foreach ($articles as $article){
//            echo $article->name.'<br>';
//        }

        // використання QueryBuilder

        // $articles = Article::where('id', '>', 3)->orderBy('name')->take(2)->get();

//        Article::chunk(2, function ($articles){
//
//        });

        // find() шукає таблицю по id

        // $article = Article::find(2);
        // $article = Article::where('id', 2)->first();
        // echo $article->text;

        // $article = Article::find([1, 2, 3]);

        // генерація виключення в разі відсутності результату
        // $article = Article::findOrFail(2);
        // $article = Article::where('id', 2)->firstOrFail(2);

        // збереження інформації

//        $article = new Article;
//        $article->name = 'New Article';
//        $article->text = 'New Text';
//        $article->save();

//        $articles = Article::all();

//        $article = Article::find(19);
//        $article->name = 'New Name 2';
//        $article->save();

        // додавання даних

//        Article::create([
//            'name' => 'hello world',
//            'text' => 'some text'
//        ]);

        // додавати лише унікальну інформацію по визначеному полю
        // перевіряє, чи в БД є запис з таким значенням, яке записано в полі
//        $article = Article::firstOrCreate([
//            'name' => 'hello world',
//            'text' => 'some text'
//        ]);

        // від перевірить, чи є запис з певною умовою
        // якщо запис є, то повертає об'єкт для даного запису
        // якщо запису немає, то повертає об'єкт моделі для даних параметрів, але вставка в БД не реалізується
//        $article = Article::firstOrNew([
//            'name' => 'hello world',
//            'text' => 'some text'
//        ]);
//
//        $article->save();
//
//        $articles = Article::all();

        // видалення даних, використовуючи модель

//        $article = Article::find(3);

        // видаляє запис, яка відповідає данній моделі
//        $article->delete();

        // Article::destroy(2);
//        Article::where('id', '>', '10')->delete();

        // softDelete
//        $article = Article::find(5);
//        $article->delete();

        // вивести навіть видалені записи
//        $articles = Article::withTrashed()->get();

//        foreach ($articles as $article) {
//            if ($article->trashed()){
//                echo $article->id.' is deleted <br>';
//
//                // витягнути запис з корзини, відновити
//                $article->restore();
//            } else {
//                echo $article->id.' not deleted <br>';
//            }
//        }

        // зразу відновити видалені записи
//        $articles = Article::withTrashed()->restore();

        // лише видалені записи вивести
//        $articles = Article::onlyTrashed()->get();

        // видалити запис, який був видалений softDelete
//        $article = Article::find(3);
        // фізичне видалення
//        $article->forceDelete();

//        dump($article);
        //dump($article);

//        $user = User::find(1);

//        $country = Country::find(1);

//        $country = $user->country;

//        $articles = $user->articles()->where('id', '>', 3)->get();

//        $article = Article::find(1);

        // вивести всі записи користувача
//        foreach ($articles as $article){
//            echo $article->name.'<br>';
//        }

//        $user = User::find(1);

        // якщо звертаєо до методу, то маємо доступ до QueryBuilder
//        $role = $user->roles()->where('roles.id', 2)->first();
//        dump($role);
//        foreach ($user->roles as $role){
//            echo $role->name.'<br>';
//        }
//        dump($user->roles);

//        $role = Role::find(1);
//
//        dump($role->users);

//        $articles = Article::all();

        // жадне завантаження
        // with() для завантаження даних зв'язаних таблиць
//        $articles = Article::with('user')->get();

        // жадне завантаження через load()
//        $articles = Article::all();
//        $articles->load('user');

//        $users =  User::with('articles', 'roles')->get();

        // вибрати користувачів, які мають зв'язані записи у таблиці articles
//        $users =  User::has('articles', '>=', '3')->get();

//        foreach ($users as $user) {
//            dump($user);
//        }

//        $user = User::find(1);

//        $article = new Article([
//            'name' => 'New Article',
//            'text' => 'Some text'
//        ]);

//        $user->articles()->save($article);

//        $user->articles()->create([
//            'name' => 'New Article',
//            'text' => 'Some text'
//        ]);

        // для збереження декількох записів (масив моделей, інформація про які повинна записати БД
//        $user->articles()->saveMany([
//            new Article(['name' => 'New Article1', 'text' => 'Some text1']),
//            new Article(['name' => 'New Article2', 'text' => 'Some text2']),
//            new Article(['name' => 'New Article3', 'text' => 'Some text3'])
//        ]);

//        $role = new Role([
//            'name' => 'guest'
//        ]);
//
//        $user->roles()->save($role);
//
//        $articles = Article::all();
//
//        dump($articles);

        // редагування даних
//        $user = User::find(2);
//
//        $user->articles()->where('id', '=', 2)->update([
//            'name' => 'NEW TEXT'
//        ]);
//
//        $articles = Article::find(2);
//        dump($articles);

        // один до одного приклад

//        $country = Country::find(1);
//
//        $user = User::find(2);
//
//        // змінюємо стан моделі Country
//        $country->user()->associate($user);
//
//        // зберігаємо зміни
//        $country->save();

        // один до багатьох приклад
//        $articles = Article::all();
//
//        $user = User::find(2);
//
//        foreach ($articles as $article){
//            $article->user()->associate($user);
//            $article->save();
//        }

        // багато до багатьох приклад

//        $user = User::find(2);
//
//        $role_id = Role::find(2);
//
////        $user->roles()->attach($role_id);
//        $user->roles()->detach($role_id);

//        $article = Article::find(11);
//        $article->name = 'Some text';
//        echo $article->name;
//        dump($article);

        $article = Article::find(11);

//        $array = ['key' => 'hello world'];

        // зміна властивостей поля
//        $article->text = $array;
//        $article->save();

        dump($article->toArray());
        dump($article->toJson());

        return;
    }

    // return material
    public function getArticle($id) {
        echo 'Hello';
    }
}
