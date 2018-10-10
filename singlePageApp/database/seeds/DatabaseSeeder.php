<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\User::class,20)->create();
        factory(\App\Models\Question::class,20)->create();
        factory(\App\Models\Reply::class,10)->create();
        factory(\App\Models\Like::class,20)->create();
        factory(\App\Models\Category::class,5)->create();

    }
}
