<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlayerPost extends Model
{
    public function genre(){
        return $this->belongsToMany('App\Genre');
    }
    public function thematic(){
        return $this->belongsToMany('App\Thematic');
    }
    public function chatroom(){
        return $this->hasOne('App\Chatroom');
    }
}
