<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chatroom extends Model
{
    public function user(){
        return $this->belongsToMany('App\User');
    }
    public function messages(){
        return $this->hasMany('App\Messages');

    }
    public function masterPost(){
        return $this->belongsTo('App\MasterPost');
    }
    public function playerPost(){
        return $this->belongsTo('App\PlayerPost');
    }
}
