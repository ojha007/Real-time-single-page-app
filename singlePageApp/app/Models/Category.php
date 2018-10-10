<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $fillable=[
      'tile',
      'question_id',
    ];
   public function questions(){
       return $this->belongsTo(Question::class,'id','id');
   }
   public function  getRouteKeyName()
   {
       return 'slug';
   }
}
