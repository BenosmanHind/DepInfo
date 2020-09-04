<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Examen extends Model
{
    public function media()
    {
        return $this->hasOne(Media::class);
    }
    
}
