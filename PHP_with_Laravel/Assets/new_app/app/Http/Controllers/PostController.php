<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
       
        return view('admin.posts.view');
    }


    public function create()
    {
       
        return view('admin.posts.create');
    }

    public function store(Request $request)
    {
        $input =$request->validate([
            'title' => 'required',
            'post_image' => 'required',
            'body' => 'required',
            
        ]);
        
    
            return Post::create($request->all());
      

    }
}
