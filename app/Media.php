<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    //
    
    public function event()
    {
        return $this->belongsTo(Event::class);
    }

    public function article()
    {
        return $this->belongsTo(Article::class);
    }
     public function bourse()
    {
        return $this->belongsTo(Bourse::class);
    }

    public function document()
    {
        return $this->belongsTo(Document::class);
    }
    
    public function examenadmin()
    {
        return $this->belongsTo(Exam_admin::class);
    }

    public function planning()
    {
        return $this->belongsTo(Planning::class);
    }

}
