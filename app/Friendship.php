<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Friendship extends Model
{
    public function user(){
        return $this->belongsTo('App\User', 'sender_id');
    }
}
