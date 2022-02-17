<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
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



//Route::get('/post/{id}', [PostsController::class,'index']);
//Route::resource('post', PostsController::class);
//Route::get('/contact', [PostsController::class,'contact']);

Route::get('/post/{id}/{name}/{password}', [PostsController::class,'show_post']);
Route::get('/contact', [PostsController::class,'contact']);

// 



/*
|--------------------------------------------------------------------------
| DATABASE Raw SQL Queries
|--------------------------------------------------------------------------
|
|
*/

// CREATE
//    Route::get('/insert', function(){
//         DB::insert('insert into post (title, body) values (?, ?)', [ 'PHP with laravel', ' Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, atque!']);
//       });

// READ
//    Route::get('/read', function(){
//         $results = DB::select('select * from post');
//         foreach ($results as $post){
//             return $post->title;
//         }  
//       });

// UPDATE
// Route::get('/update',function(){
//     $update = DB::update('update post set title = "Update title" where id=?', [5]);
//     if ($update = 1) {
//         return ('IT is now updated');
//     }
// });


// DELETE
// Route::get('/delete', function(){
//   DB::delete('delete from post  where id=?', [4]);
//   return ('DELETED');
// });

/*
|--------------------------------------------------------------------------
| ELOQUENT
|--------------------------------------------------------------------------
*/


// Route::get('/read', function(){
//     $post = Post::all();
//     return $posts;
// });


// Route::get('/find', function(){
//     $post = Post::find(6);
//     return $post->title;
// });



// Route::get('/findwhere',function(){
//         $post = Post::where('id', 7)->orderBy('id', 'desc')->take (1)->get();
//         return $post;
// });


// Route::get('/basicinsert', function(){

//     $post = new Post;
//     $post->title = 'Something New';
//     $post->body = 'lorem';
//     $post->save();

//     return ('Created Successfully');
// });


// Route::get('/create', function(){
//     Post::create(['title'=>'The create method', 'content'=> 'Lorem ipsum, dolor sit amet consectetur']);
// });


// Route::get('/update',function(){

//     Post::where('id',6)->update(['title'=> 'THIS IS NOW UPDATED','body'=>"Lorem ipsum, dolor"]);
//     return ('Updated Successfully');
// });


// Route::get('/delete', function(){
//     $post = Post::find(6);
//     $post->delete();

//     return ("DELETED");
// });

// Route::get('/delete2', function(){

//  Post::destroy(7);
     
    
// });

