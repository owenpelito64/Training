<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Models\Post;
use App\Models\User;
use App\Models\Role;
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
//     $post->title = 'Something New 2';
//     $post->body = 'lorem 2';
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


//DELETING TO TRASH
// Route::get('/softdelete', function(){
//     Post::find(8)->delete();
// });

//READING DELETED FROM TRASH
// Route::get('/readsoftdelete', function(){
// $post = Post::withTrashed()-> where('id', 8)->get();
// return $post;
// });

//RESTORE SOFTDELETED DATA
// Route::get('/restore', function(){
//     Post::withTrashed()->where('is_admin', 0)->restore();
// });

//FORCE DELETE DATA WITH SOFTDELETE ON IT.
// Route::get('/forcedelete', function(){
//     POST::onlyTrashed()->where('is_admin', 0)->forceDelete();
// });


// Route::get('/showalldata', function(){

//     $post = POST::where('is_admin', 0)->where('id', '>' , 9)->get(['title','body']);
//     return $post;
// });


/*
|--------------------------------------------------------------------------
| ELOQUENT RELATIONSHIP
|--------------------------------------------------------------------------
*/

//One to One
// Route::get('/user/{id}/post', function($id){
//         return User::find($id)->user_post->title;
// });

//Inverse relation
// Route::get('/post/{id}/user', function($id){
//     return Post::find($id)->user->name;
// });

//One to many
// Route::get('/post', function(){
//     $user = User::find(1);
//     foreach($user->user_posts as $post) {
//        echo $post->title. "<br>";
//     }
// });


//Many to Many relationship
Route::get('/user/{id}/role', function($id){
    $role = User::find($id);
    foreach($role->roles as $role) {
       echo $role->name. "<br>";
    }

   
});