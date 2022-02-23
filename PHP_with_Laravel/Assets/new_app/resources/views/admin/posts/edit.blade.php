<x-admin_master>

 

    @section('content')

    <div class="col-6">

       

      
        <h1>Edit Post</h1>


        <form method="post" action="{{route('post.update',$post->id)}}" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="title">Title</label>
                <input 

               
                type="text" 
                name='title'
                placeholder=""
                class="form-control"   
                aria-describedby=""
                value="{{$post->title}}"
                >
              
            </div>
            <div class="form-group">
                <div><img width="100%" src="{{$post->post_image}}" alt="">
                   </div>
                <label for="file">File</label>
                <input 
                type="file" 
                name='post_image'
                class="form-control-file"   
                id="post_image">

            </div>

            
              <div class="form-group">
                   
                <label for="body">Post</label>

                <textarea name="body" id="body" class="form-control" cols="30" rows="10">{{$post->body}}</textarea>
             

              </div>
              <button class="btn btn-primary" type="submit">
                   Post
               </button>
            
        </form>




    </div>
    @endsection
</x-admin_master>