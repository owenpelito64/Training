<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Post;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    
      $user = User::factory(3)
        ->has(Post::factory())
        ->create();
      
   
            
        //     $user->posts()->save(factory('App\Models\Post')->make());

        // });

        // \App\Models\User::factory(10)->
        // has(\App\Models\Todo::factory()->count(3))
        // ->create();
       
    }
}
