<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\Question::class, function (Faker $faker) {
    $title=$faker->sentence();
    return [
         'title'=>$title,
         'slug'=>str_slug($title),
          'users_id'=>function(){
           return \App\User::all()->random();
          },

    ];
});
