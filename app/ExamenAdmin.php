<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExamenAdmin extends Model
{
    //
    public function media()
    {
        return $this->hasOne(Media::class);
    }
}
