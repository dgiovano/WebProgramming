<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class genre extends Model
{
    protected $table = "genre";
    public function movies(){
        return $this->hasMany("App\movies","id","genre_id");
    }
}
