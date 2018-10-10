<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    public  $fillable=['id'];

    public  function questions(){
        return $this->belongsTo(Question::class,'id','id');
    }
    public function likes(){
        return $this->hasMany(Like::class);
    }
}
