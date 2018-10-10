<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\Like::class, function (Faker $faker) {
    return [
          'id'=>rand(1,20),
        'questions_id'=>function(){
         return \App\Models\Question::all()->random();
        },
         'users_id'=>function(){
        return \App\User::all()->random();
       },
          'replies_id'=>function(){
        return   \App\Models\Reply::all()->random();
       },


    ];
});
