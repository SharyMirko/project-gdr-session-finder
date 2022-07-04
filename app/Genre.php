<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    public function masterPost(){
        return $this->belongsToMany('App\Model\MasterPost');
    }
    public function playerPost(){
        return $this->belongsToMany('App\Model\PlayerPost');
    }

}
