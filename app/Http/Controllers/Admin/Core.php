<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class Core extends Controller
{
    //

    // у конструкторі можна визначити список посередників
    public function __construct()
    {
        // $this->middleware('mymiddle');
    }

    // return list materials
    public function getArticles() {

    }

    // return material
    public function getArticle($id) {
        echo 'Hello';
    }
}
