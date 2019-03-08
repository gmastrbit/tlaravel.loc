<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use App\User;

// обробляє запит головної сторінки закритого розділу нашого додатку
class AdminController extends Controller
{
    public function __construct()
    {
        // встановити посередник безпосередньо для потрібного контролера
//        $this->middleware('auth');
    }
    
    public function show(Request $request)
    {

        // повертає об'єкт аутентифікованого користувача
        $user = Auth::user();

        // перевірка аутентифікації користувача
        if (!Auth::check()){

            $user = User::find(5);

            // вручну аутентифікуємо користувача
//            Auth::login($user);

            // аутентифікація, використовуючи guard
//            Auth::guard('web')->login($user);

            // реалізація logout
//            Auth::guard('web')->logout();

            // аутентифікація по id
            Auth::loginUsingId(5);
//            return redirect('login');
        }

        if (Auth::viaRemember()){
            echo 'yes';
        }

//        $user = $request->user();

        // Auth::id() - отримати ідентифікатор аутентифікованого користувача

        dump(Auth::id());

        return view('welcome');
    }
}
