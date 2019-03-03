<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    // модель конкретного користувача зв'язується з моделлю конкретної країни
    public function country()
    {
        // модель користувача зв'язується з одним записом іншої моделі
        // прив'язати модель country до моделі id по значенню поля id в моделі users
        // localKey повинен відповідати зовнішньому ключу
        return $this->hasOne('App\Country', 'user_id', 'id'); // очікує наявності поля user_id
    }

    // реалізація зв'язку один до багатьох
    public function articles()
    {
        // модель user прив'язується до декількох моделей записів (article)
        return $this->hasMany('App\Article');
    }

    public function roles()
    {
        // один користувач має відношення до декількох ролей
        return $this->belongsToMany('App\Role');
    }
}
