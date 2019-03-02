<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    // вибираєм назву таблиці, з якою будемо працювати
    // protected $table = 'articles';

    // первинний ключ
    protected $primaryKey = 'id';

    // визначення інкрементування id
    public $incrementing = FALSE;

    // чи треба поля created_at i updated_at
    public $timestamps = FALSE;




}
