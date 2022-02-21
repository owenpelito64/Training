<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    //   $posts = Post::all();
    // return view('posters.index', compact('posts'));




    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('posters.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Post::create($request->all());
        
        // return redirect('/post');


        // return $request->get('title');
        // $input = $request->all();
        // $input['title'] = $request->title;
        // Post::create($request->all());
        // $post = new Post;
        // $post->title =  $request->title;
        // $post->save()

        $file =  $request->file('fileToUpload');

        

        return $file;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $posts = Post::findOrFail($id);
        // return view('posters.index', compact('posts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $post = Post::findOrFail($id);
        // return view('posters.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $post = Post::findOrFail($id);

        // $post->update($request->all());

        // return redirect('post');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

   
    public function destroy($id)
    {
        // $post = Post::whereId($id)->delete();
        // return redirect('post');
    }



    // trying custom function

    public function contact()
    {

        // $people = ['James', 'Jose' , 'Peter' , 'Maria'];



        // return view('contact' , compact('people'));
    }

    
   /*
    public function show_post($id)

    {
        return view('post')->with('id',$id);
    }
    
    */

    public function show_post($id,$name,$password)

    {
        // return view('post',compact('id','name','password'));
    }

}
