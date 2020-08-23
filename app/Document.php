<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    public function media()
    {
        return $this->hasOne('App\Media');
    }
}
