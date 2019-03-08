<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Article;
use Auth;
use Gate;

class AdminUpdatePostController extends Controller
{
    public function show(Request $request, $id)
    {
        $article = Article::find($id);
        return view('default.update_post', ['title' => 'Редагування матеріалу', 'article' => $article]);
    }

    public function create(Request $request)
    {
        $this->validate($request, [
           'name' => 'required'
        ]);

        $user = Auth::user();

        $data = $request->except('_token');

        $article = Article::find($data['id']);

        if(Gate::/*forUser(6)->*/allows('update-article', $article)){
            $article->name = $data['name'];
            $article->img = $data['img'];
            $article->text = $data['text'];

            $res = $user->articles()->save($article);

            return redirect()->back()->with('message', 'Матеріал оновлений');
        }

        return redirect()->back()->with(['message' => 'У вас немає прав']);
    }
}
