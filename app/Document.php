<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    public function medias()
    {
        return $this->hasMany('App\Media');
    }

    public function module()
    {
        return $this->belongsTo('App\Module');
    }


    public function returnModule(){
        $module = Module::where('id','=',$this->module_id)->first();
        return $module; 
    }
}
