


@extends('layouts.blank')

@section('content')

@auth
<div class="container-fluid col-6 ">

  <!-- Page Heading -->


  <form method="post" action="{{ route('posts') }}" enctype="multipart/form-data">
    @csrf
   @method('POST')
    {{-- <div class="form-group">
        <label for="title">Title</label>
        <input 
        type="text" 
        name='title'
        placeholder="Title of your post"
        class="form-control"   
        aria-describedby="">

    </div>
    <div class="form-group">
        <label for="file">File</label>
        <input 
        type="file" 
        name='post_image'
        class="form-control-file"   
        id="post_image">

    </div> --}}

    
      <div class="form-group">
           
        <label for="body">Post</label>

        <textarea name="body" id="body" class="form-control" cols="30" rows="10"
        @error('body')
        .border-left-danger
        @enderror
        placeholder="Post Something"></textarea>
     
        @error('body')
            {{ $message }}
        @enderror

      </div>
      <button class="btn btn-primary" type="submit">
           Post
       </button>
    
</form>
@endauth
 <!-- Begin Page Content -->
 

  @if ($posts -> count())

    @foreach ($posts as $post)
   
    <x-post :post="$post" />

  
  
    @endforeach

       {{-- pagination --}}
       <div class="mt-5">
     
           {{ $posts->links() }}

       </div>


 
      
     
    @else
      <p>     There is no post</p>
    @endif
 
      

  </div>


  <!-- /.container-fluid -->
@endsection
      