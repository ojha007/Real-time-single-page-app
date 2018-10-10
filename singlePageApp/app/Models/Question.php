<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public  $fillable=[
        'title',
        'slug',
    ];
   public  function getRouteKeyName()
   {
       return "slug";
   }

    public function replies(){
        return $this->hasMany(Reply::class,'id','id');
    }
    public function likes(){
        return $this->hasMany(Like::class);
    }
    public  function user(){
        return $this->belongsTo(User::class,'id','id');
    }
    public function category(){
         return $this->belongsTo(Category::class);
     }

}
