<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    public $fillable=['id'];
    public  function  question(){
        return $this->belongsTo(Question::class);
    }
    public  function replies(){
        return $this->belongsTo(Reply::class);
    }
    public function  user(){
        return $this->belongsTo(User::class);
    }
}
