<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Tag;
use App\Models\Video;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/create', function(){
//CREATE
    $post = Post::create(['name'=>'My first post']);
    $tag1 = Tag::find(1);
    $post->tags()->save($tag1);


    $video = Video::create(['name'=>'Video.mov']);
    $tag2 = Tag::find(2);
    $video->tags()->save($tag2);
   
    return ('Successfully Created.');

});


Route::get('/read', function(){
    //READ AND UPDATE
        $post = Post::findOrFail(1);
       
    
        foreach($post->tags as $tag){
            echo $tag;
        }
  
    });

    Route::get('/update', function(){
        
        
        
        //UPDATE
            // $post = Post::findOrFail(1);
            // foreach($post->tags as $tag){
               
                
            //     $tag->whereName('PHP')->update(['name'=>'Laravel']);
            //     return ('Successfully update');
            // }
      

                   $post = Post::findOrFail(1);
                   $tag = Tag::find(3);
            //    $post->tags()->save($tag);
            // $post->tags()->attach($tag);
            // $post->tags()->sync([2]);

        });
    

        Route::get('/delete', function(){
            //Delete
                $post = Post::findOrFail(2);
               
            
                foreach($post->tags as $tag){
                    $tag->whereId(1)->delete();
                    return ('Deleted');
                }
          


            });