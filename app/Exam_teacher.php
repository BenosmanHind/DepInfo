<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exam_teacher extends Model
{
    //

    public function returnModule(){
        $module = Module::find($this->module_id);
        return $module;
    }
}
