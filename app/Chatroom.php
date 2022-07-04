<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chatroom extends Model
{
    public function user(){
        return $this->belongsToMany('App\Model\User');
    }
    public function messages(){
        return $this->hasMany('App\Model\Messages');

    }
    public function masterPost(){
        return $this->belongsTo('App\Model\MasterPost');
    }
    public function playerPost(){
        return $this->belongsTo('App\Model\PlayerPost');
    }
}
