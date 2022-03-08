<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    //

    public function __contruct()
    {
        $this->middleware(['auth'])->only(['store','destroy']);
    }

    public function show(Post $post){

        return view('posts.show',[ 'post'=> $post]);
       }

    public function posts(){
       
        $posts = Post::latest()->with(['user','likes'])->simplePaginate(5);
    
        return view('posts.index', ['posts'=> $posts]);
    }

    public function store(Request $request){
        
      
        $this->validate($request, [
            'body' => 'required'
        ]);

        $request->user()->posts()->create($request->only('body'));

        return back();
    }

    public function destroy(Post $post){
      
       $post->delete();
       return back();
      }
    
}