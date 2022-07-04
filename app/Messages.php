<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Messages extends Model
{
    public function chatroom(){
        return $this->belongsTo('App\Model\Chatroom');
    }
    
    
}
