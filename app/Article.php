<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    // підключення трейту для механізму м'якого видалення
    use SoftDeletes;

    // вибираєм назву таблиці, з якою будемо працювати
    // protected $table = 'articles';

    // первинний ключ
    protected $primaryKey = 'id';

    // визначення інкрементування id
    public $incrementing = TRUE;

    // чи треба поля created_at i updated_at
    public $timestamps = TRUE;

    // масив полів, в які ми дозволяємо додавання інформації
    protected $fillable = ['name', 'text'];

    // список полів, які недоступні для запису
    protected $guarded = ['*'];

    protected $dates = ['deleted_at'];

}
