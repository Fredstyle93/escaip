<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

//user has many project

class Project extends Model
{
    
    public function users()

    {

        return $this->belongsTo("App\User");

    }
}
