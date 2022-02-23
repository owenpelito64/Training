<x-admin_master>

 

    @section('content')
        <h1>Create</h1>


        <form method="post" action="{{route('post.store')}}" enctype="multipart/form-data">
            @csrf
           
            <div class="form-group">
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

            </div>

            
              <div class="form-group">
                   
                <label for="body">Post</label>

                <textarea name="body" id="body" class="form-control" cols="30" rows="10"></textarea>
             

              </div>
              <button class="btn btn-primary" type="submit">
                   Post
               </button>
            
        </form>
    @endsection
</x-admin_master>