<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\Category::class, function (Faker $faker) {
    $title=$faker->sentence();
    return [
      'title'=>$title,
        'slug'=>str_slug($title),
        'question_id'=>function(){
           return \App\Models\Question::all()->random();
        },
    ];
});
