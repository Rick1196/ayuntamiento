<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Secciones extends Model
{
    public function posts()
    {
        return $this
            ->belongsToMany('App\Post')
            ->withTimestamps();
    }
}
