<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    //

    public function show()
    {

//        $data = ['title' => 'Hello World'];
//        return view('default.template', $data); // передача параметрів у вид

        // передача параметра за допомогою with

//        return view('default.template')->with('title', 'Hello World');

        // передача параметрыв за допомогою with

//        $view = view('default.template');
//        $view->with('title', 'Hello World');
//        $view->with('title2', 'Hello World 2');
//
//        return $view;

        // останній спосіб передачі даних у шаблон

        if (view()->exists('default.index')) {

            // перейменовування шаблона
            // view()->name('default.template', 'myview');

            // доступ до вида по його імені
            //return view()->of('myview')->withTitle('Hello World');

            //$path = config('view.paths');
            //return view()->file($path[0].'/default/template.php')->withTitle('Hello World');

             return view('default.index')->withTitle('Hello World');

        }

        abort(404);

    }
}
