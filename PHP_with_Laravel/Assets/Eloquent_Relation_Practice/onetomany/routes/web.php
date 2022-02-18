<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Post;
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




/*
|--------------------------------------------------------------------------
| One-To-Many Relation
|--------------------------------------------------------------------------
|
*/
//CREATE
Route::get('/create/{title}/{body}', function ($title,$body) {
    $user = User::findOrFail(1);
    $post = new Post(['title'=>$title,'body'=> $body]);
    $user->posts()->save($post);
    foreach($user->posts as $posts){
        return ("successfully created post :"). $posts->title. (""). $posts->body;
    }
 
});

//READ
Route::get('/read', function () {
    $user = User::findOrFail(1);
    //use loop to pull up user info due to have one to many relation
    // dd($user);
    foreach($user->posts as $post){
        echo $post->title. "<br>";
    }
    
});


//UPDATE
Route::get('/update/{id}/{title}/{body}', function ($id,$title,$body) {
    $user = User::findOrFail(1);
    $user->posts()->whereId($id)->update(['title'=>$title,'body'=>$body]);   
    foreach($user->posts as $post){
        echo ('Sucessfully Updated Post: '). $id . "<hr>";
        return $post->title. "<br>" . $post->body;
    }
});

//DELETE
Route::get('/delete/{id}', function ($id) {
    $user = User::findOrFail(1);
    $user->posts()->whereId($id)->delete();   
    echo ('successfully deleted');
});




