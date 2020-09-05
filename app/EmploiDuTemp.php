<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmploiDuTemp extends Model
{
    //
    public function media()
    {
        return $this->hasOne(Media::class);
    }
    
}
