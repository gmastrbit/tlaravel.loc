<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Auth;

class MyAuthController extends Controller
{
    public function showLogin()
    {
        return view('auth.login');
    }

    public function authenticate(Request $request)
    {
        $array = $request->all();

        // якщо був увімкнений чекбокс Remember
        $remember = $request->has('remember');

        // метод attempt() утентифікує конкретного користувача
        if (Auth::attempt([
            'login' => $array['login'],
            'password' => $array['password'],
        ], $remember)){
            // intended() перемістить користувача на той URL, на який хотів перейти до проходження аутентифікації
            return redirect()->intended('/admin');
        }

        // back() поверне користувача назад, на попередню сторінку
        return redirect()->back()->withInput($request->only('login', 'remember'))->withErrors([
            'login' => 'Данні аутентифікації не вірні'
        ]);
    }
}
