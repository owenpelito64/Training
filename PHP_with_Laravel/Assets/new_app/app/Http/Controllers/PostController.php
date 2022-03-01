<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Post;
use App\Models\User;


class PostController extends Controller
{
    public function show(Post $post)
    {
       
        return view('layouts.blog_post', ['post'=> $post]);
    }


    public function view()
    {
        $posts=Post::get();
        // $posts = auth()->user()->posts;
        
        return view('admin.posts.view', ['posts'=>$posts]);
    }


    public function create()
    {
       
        return view('admin.posts.create');
    }




    public function store(Request $request)
    {
     
       $input = $request->validate([
            'title' => 'required',
            'post_image' => 'required',
            'body' => 'required',
            
        ]);
 
        auth()->user()->posts()->create($input);
        session()->flash('post-create-message', 'Post was Created');
        return redirect()->route('post.view');
       
    
    }



    public function destroy(Post $post)
    {
        $this->authorize('delete', $post);
       $post->delete();
       Session::flash('message', 'Post was deleted');
       return back();

       
    }

    public function edit(Post $post)
    {       
        $this->authorize('update', $post);
        return view('admin.posts.edit', ['post'=>$post]);
       
    
    }


    
    public function update(Post $post, Request $request)
    {       
     
       
        $input = request()->validate([
            'title' => 'required',
            'post_image' => 'file',
            'body' => 'required',
            
        ]);

        $this->authorize('update', $post);
           $post -> update($request->all());
        session()->flash('post-edit-message', 'Post was edited');
        return redirect()->route('post.view');
    }
}


