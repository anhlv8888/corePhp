<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $table = 'groups';
    public function  contacts(){
        return $this->hasMany('App\Contact');
    }
}
