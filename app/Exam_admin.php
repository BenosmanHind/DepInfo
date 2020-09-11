<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exam_admin extends Model
{
    public function media(){
        
        return $this->hasMany('App\Media');   
    }
}
