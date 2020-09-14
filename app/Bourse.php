<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Bourse extends Model
{
    //
    use SoftDeletes;

    protected $dates =['deleted_at'];



      public function medias()
{
    return $this->hasMany(Media::class);
}

}

