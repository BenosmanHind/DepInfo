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

    public function document()
    {
        return $this->belongsTo(Document::class);
    }
}
