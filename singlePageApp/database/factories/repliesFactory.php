<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\Reply::class, function (Faker $faker) {
    return [
        'title'=>$faker->sentence(),
        'users_id'=>function(){
            return \App\User::all()->random();
        },
        'questions_id'=>function(){
            return \App\Models\Question::all()->random();
        },

    ];
});
