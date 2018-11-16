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
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
//    protected $request;

//    public function __construct(Request $request)
//    {
//        $this->request = $request;
//    }
    
    // впровадження залежностей
    public function show(Request $request, $id = false)
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

        if ($request->isMethod('post')){
            //var_dump($request->url());
            $request->flash();
            return redirect()->route('contact');
        }

        return view('default.contact', ['title' => 'Contacts']);
    }
}