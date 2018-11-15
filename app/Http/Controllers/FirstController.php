<?php
/**
 * Created by PhpStorm.
 * User: H_Inc
 * Date: 15.11.2018
 * Time: 20:36
 */

namespace App\Http\Controllers; // визначення простору імен для даного контролера

use App\Http\Controllers\Controller; // надаємо доступ до даного класу для базового батьківського контролера

class FirstController extends Controller
{

//    public function show() {
//        echo __METHOD__;
//    }

    // передача параметрів
    public function show($id = null) {
        echo __METHOD__;
        echo $id;
    }
}
?>