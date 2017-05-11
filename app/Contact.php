<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contacts';
    protected  $fillable = [
        'name' , 'email','address' ,'company','phone','group_id'
    ];

    public function groups(){
        return $this->belongsTo('App\Group');
    }
    // note
}
