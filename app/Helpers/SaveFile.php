<?php

namespace App\Helpers;

use App\Helpers\Contracts\SaveStr;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

// клас реалізатор контракту
class SaveFile implements SaveStr {
    public static function save(Request $request, User $user)
    {
        // створюємо об'єкт даного класу, отримуємо доступ до методів даного класу
        $obj = new self;

        $data = $obj->checkData($request->only('name', 'text'));

        $str = $data['name']." | ".$data['text'];

        Storage::prepend('srt.txt', $str);
    }

    public function checkData($array){
        return $array;
    }
}