<?php

namespace App\Http\Controllers\Admin;

use App\Article;
use Event;
use App\Events\onAddArticleEvent;
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

        $article = new Article;

        /*if(Gate::denies('add', $article)){
            return redirect()->back()->with(['message' => 'У вас немає прав']);
        }*/

        if($request->user()->cannot('add', $article)){
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

        // викидання події
//        Event::fire(new onAddArticleEvent($res,$user));

//        event(new onAddArticleEvent($res,$user));

        Event::fire('onAddArticleEvent', [$res, $user]);

        return redirect()->back()->with('message', 'Матеріал доданий');
    }

}
