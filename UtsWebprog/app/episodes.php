<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class episodes extends Model
{
    public function movies(){
        return $this->belongsTo('App\movies');
    }
}
