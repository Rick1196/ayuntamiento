<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    public function posts()
    {
        return $this
            ->belongsToMany('App\Post')
            ->withTimestamps();
    }
    public function noticias()
    {
        return $this
            ->belongsToMany('App\Noticia')
            ->withTimestamps();
    }
    public function personas()
    {
        return $this
            ->belongsToMany('App\Persona')
            ->withTimestamps();
    }
    public function sitios()
    {
        return $this
            ->belongsToMany('App\Sitio')
            ->withTimestamps();
    }
}
