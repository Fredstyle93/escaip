<?php

namespace App;

use App\Skill;
use App\School;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function skills()

    {

        return $this->belongsToMany(Skill::class, 'skill_user');

    }
    public function schools()

    {

        return $this->belongsToMany(School::class, 'school_user');

    }

    public function projects() {

        return $this->hasMany("App\Project");
    }
}
