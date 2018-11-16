<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

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

            return view('default.about')->withTitle('Hello World');

            // віддати файл на скачування
            //return response()->download('robots.txt', 'mytext.txt');

            // перенаправлення
            // return redirect('/');
            //return new RedirectResponse('/articles');
        }
        abort(404);
    }
}
