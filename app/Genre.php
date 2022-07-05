<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    public function masterPost(){
        return $this->belongsToMany('App\MasterPost');
    }
    public function playerPost(){
        return $this->belongsToMany('App\PlayerPost');
    }

}
