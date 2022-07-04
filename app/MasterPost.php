<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MasterPost extends Model
{
    public function genre(){
        return $this->belongsToMany('App\Model\Genre');
    }
    public function thematic(){
        return $this->belongsToMany('App\Model\Thematic');
    }
    public function chatroom(){
        return $this->hasOne('App\Model\Chatroom');
    }
}
