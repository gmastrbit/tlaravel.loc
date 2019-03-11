<?php

namespace App\Helpers;

use App\Helpers\Contracts\SaveStr;
use App\User;
use Illuminate\Http\Request;

// клас реалізатор контракту
class SaveEloquentOrm implements SaveStr {
    public static function save(Request $request, User $user)
    {
        // створюємо об'єкт даного класу, отримуємо доступ до методів даного класу
        $obj = new self;

        $data = $obj->checkData($request->only('name', 'text'));

        $user->articles()->create($data);
    }

    public function checkData($array){
        return $array;
    }
}