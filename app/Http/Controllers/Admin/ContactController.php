<?php
/**
 * Created by PhpStorm.
 * User: H_Inc
 * Date: 16.11.2018
 * Time: 16:44
 */

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\ContactRequest;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Auth;
use Validator;
use Session;

use Lang;

use App\Helpers\Contracts\SaveStr;

class ContactController extends Controller
{
//    protected $request;

//    public function __construct(Request $request)
//    {
//        $this->request = $request;
//    }
    
    // впровадження залежностей
    public function store(Request $request, SaveStr $saveStr, $id = false)
    {
        // all() - для всіх
        // only() - для деяких
        // except() - виключаючи; ті комірки, які нас не цікавлять
//        var_dump($request->only('name', 'site'));

//        if ($request->has('name')) {
//            echo "<h1>".$request->input('name', 'default')."</h1>";
//        }

//        if ($request->is('contact/*')){
//            var_dump($request->path());
//        }

//        if ($request->is('contact/*')){
//            var_dump($request->url());
//        }

//        if ($request->isMethod('post')){
//            //var_dump($request->url());
//            $request->flash();
//            return redirect()->route('contact');
//        }

        // Валідація

//        if ($request->isMethod('post')){
//
//            // формування масиву правил
//            $rules = [
//                'name' => 'required|max:10|alpha',
//                'email' => 'required|email'
//            ];
//
////            $this->validate($request, $rules);
//
//            $validator = Validator::make($request->all(), $rules);
//
//            if($validator->fails()) {
//
//                // зберігання результату
//                $request->flash();
//
//                return view('default.contact', ['title' => 'Contacts'])->withErrors($validator)->withInput($request->all());
//            }
//
//        }

        // ручна побудова валідатора:

//        if ($request->isMethod('post')) {
//            $messages = [
//                'name.required' => 'ПОЛЕ :attribute обов\'язкове для заповнення',
//                'email.max' => 'Максимально допустима кількість символів :max',
//            ];
//
//            $validator = Validator::make($request->all(), [
//                'name' => 'required',
//                // sometimes - якщо поле присутнє в об'єкті, який провіряється, якщо його відправили
//                'email' => 'required'
//            ], $messages);
//
//            // будуть оброблені поля, які передаються 1 аргументом, в тому випадку якщо функція callback повернула true
//            $validator->sometimes(['email','site'], 'required', function($input){
////                dump($input);
////                exit();
//                return strlen($input->name) >= 10;
//            });
//
//            // функція, код якої виконається зразу ж після створення валідатора
//            $validator->after(function ($validator){
//                $validator->errors()->add('name', 'Додаткове повідомлення');
//            });
//
//            if ($validator->fails()) {
//
//                $messages = $validator->errors();
//
//                // якщо для даного поля є повідомлення про помилки
////                if ($messages->has('name')){
////                    dump($messages->get('name'));
////                }
//
////                dump($messages->all());
////                dump($messages->first());
////                dump($messages->get('name'));
////                dump($messages->all('<p> :message </p>'));
//
//                dump($validator->failed());
//
//                return redirect()->route('contact')->withErrors($validator)->withInput();
//
////                $request->flash();
////                return view('default.contact', ['title' => 'Contacts'])->withErrors($validator)->withInput($request->all());
//            }
//
//            // $this->validate($request, $rules, $messages);
//        }
//
//        return view('default.contact', ['title' => 'Contacts']);

        $saveStr->save($request, Auth::user());

        return redirect()->route('contact');
    }

    public function show(Request $request) {

        // надає API для роботи з сесіями
//        $result = $request->session()->get('key', 'default');

        // отримати всі дані сесії
//        $result = $request->session()->all();

//        if ($request->session()->has('key.first')){
//            $result = $request->session()->all();

        // додати значення в масив в сесії
//           $request->session()->push('key.second', 'value2');

        // додати значення в масив в сесії за допомогою фасада
//           Session::push('key.second', 'value2');

        // функція-хелпер
//            session(['key2' => 'value2']);
//            session(['key2' => 'value2']);
//            dump(session('key5', 'default'));

//            dump($result);
//        }

        /*$request->session()->put('key.first', 'value');
        $result = $request->session()->all();

        dump($result);*/

        // видалити комірку
//        Session::forget('key2');

        // очистити сесію
//        Session::flush();

        // отримати дані по ключу і відразу їх видалити
//        dump(Session::pull('key'));

        // зберігає інформацію у сесію але лише на 1 запит
//        Session::flash('message', 'value');

        // продовжити зберігання даних ще на 1 запит
//        Session::reflash();

        // поверне переведений текст для певної мовної константи
//        $title_head = Lang::get('messages.hello', ['name' => 'Ben']);

        if (Lang::has('messages.apples')) {
            $title_head = Lang::choice('messages.apples', 5);
        }

        return view('default.contact', ['title' => 'Contacts', 'title_head' => $title_head]);
    }
}