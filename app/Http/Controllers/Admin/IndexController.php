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
        $array = [
            'title' => 'Laravel Project',
            'data' => [
                'one' => 'List 1',
                'two' => 'List 2',
                'three' => 'List 3',
                'four' => 'List 4',
                'five' => 'List 5'
            ],
            'dataI' => ['List1', 'List2', 'List3', 'List4', 'List5'],
            'bvar' => true,
            'script' => '<script>alert("Hello!");</script>'
        ];

        if (view()->exists('default.index')) {
             return view('default.index', $array);
        }
        abort(404);
    }
}
