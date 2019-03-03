<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    // прив'язка цієї моделі до моделі user:

    public function user()
    {
        return $this->belongsTo('App\User');
    }    
}
