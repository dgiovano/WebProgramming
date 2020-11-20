<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class movies extends Model
{
    public function genre(){
        return $this->belongsTo('App\genre');
    }
    public function episodes(){
        return $this->hasMany('App\episodes','id','movie_id');
    }
}
