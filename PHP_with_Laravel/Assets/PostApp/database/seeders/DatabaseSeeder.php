<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use  App\Models\User;
use  App\Models\Post;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        //Creates A post with an assign 1 to user_id
        // Post::Factory(10)->create(['user_id'=> 1]);


        // Creates A Post with a relation to the created user
      User::factory(3)->has(Post::factory())->create();
    }
}
