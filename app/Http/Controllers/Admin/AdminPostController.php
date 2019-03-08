<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\User;
use Auth;

use Gate;

class AdminPostController extends Controller
{
    public function show()
    {
        return view('default.add_post', ['title' => 'Новий матеріал']);
    }

    public function create(Request $request)
    {

        if(Gate::denies('add-article')){
            return redirect()->back()->with(['message' => 'У вас немає прав']);
        }

        $this->validate($request, [
            'name' => 'required'
        ]);

        $user = Auth::user();
        $data = $request->all();

        $res = $user->articles()->create([
            'name' => $data['name'],
            'img' => $data['img'],
            'text' => $data['text'],
        ]);

        return redirect()->back()->with('message', 'Матеріал доданий');
    }

}
