<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function image(){
        return $this->belongsTo('App\Image');
    }

    public function seccion(){
        return $this->belongsTo('App\Secciones');
    }
}
