<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    public function docs_pubs()
    {
        return $this
            ->belongsToMany('App\docs_pubs')
            ->withTimestamps();
    }
}
