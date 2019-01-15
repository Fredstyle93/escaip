<?php

namespace App;

use App\Skill;
use App\School;
use Illuminate\Support\Facades\Cache;
use Illuminate\Notifications\Notifiable;
use Hootlex\Friendships\Traits\Friendable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    use Friendable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'userName', 'email', 'password', 'firstName','lastName', 'avatar'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token', 'status'
    ];

    public function skills()

    {

        return $this->belongsToMany(Skill::class, 'skill_user');

    }
    public function schools()

    {

        return $this->belongsToMany(School::class, 'school_user');

    }

    public function friendships(){
        return $this->hasMany('App\Friendship');
    }

    public function isOnline()
{
    return Cache::has('user-is-online-' . $this->id);
}

    public function projects() {

        return $this->hasMany("App\Project");
    }
}
