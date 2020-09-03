<?php

namespace App;



use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
	
    public function documents(){
        return $this->hasMany('App\Document');
    }
}
