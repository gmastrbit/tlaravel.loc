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

use Validator;

class ContactController extends Controller
{
//    protected $request;

//    public function __construct(Request $request)
//    {
//        $this->request = $request;
//    }
    
    // впровадження залежностей
    public function show(Request $request, $id = FALSE)
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

        if ($request->isMethod('post')){

            // формування масиву правил
            $rules = [
                'name' => 'required|max:10|alpha',
                'email' => 'required|email'
            ];

//            $this->validate($request, $rules);

            $validator = Validator::make($request->all(), $rules);

            if($validator->fails()) {

                // зберігання результату
                $request->flash();

                return view('default.contact', ['title' => 'Contacts'])->withErrors($validator)->withInput($request->all());
            }

        }

        return view('default.contact', ['title' => 'Contacts']);
    }
}