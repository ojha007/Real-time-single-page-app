<?php

namespace App;

use App\Models\Like;
use App\Models\Question;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements jwtsubject
{
    use Notifiable;


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
    public  function like(){
        return $this->hasMany(Like::class);
    }
    public  function question(){
        return $this->hasMany(Question::class);
    }
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }


    public function getJWTCustomClaims()
    {
        return [];
    }
    public  function  setPasswordAttribute($value){
        $this->attributes['password']=bcrypt($value);
    }
}
