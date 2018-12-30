<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

//user has many project

class Project extends Model
{

    protected $fillable = [
        'title', 'subTitle', 'description', 'imageProject','user_id', 'category_id'
    ];

    
    public function users()

    {

        return $this->belongsTo("App\User");

    }
}
