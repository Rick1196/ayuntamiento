<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class docs_pubs extends Model
{
    public function file(){
        return $this->belongsTo('App\File');
    }
}
