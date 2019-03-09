<?php

namespace App\Policies;

use App\Article;
use Illuminate\Auth\Access\HandlesAuthorization;
use App\User;

class ArticlePolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    // якщо повертає true, то дія для користувача можлива
    public function add(User $user)
    {
        foreach($user->roles as $role){
            if ($role->name == 'Admin') {
                return true;
            }
        }
        return false;
    }

    public function update(User $user, Article $article)
    {
        foreach ($user->roles as $role){
            if($role->name == 'Admin'){
                if($user->id == $article->user_id){
                    return true;
                }
            }
        }

        return false;
    }

    public function before(User $user)
    {
        foreach($user->roles as $role){
            if ($role->name == 'Admin') {
                return true;
            }
        }
        return false;
    }
}