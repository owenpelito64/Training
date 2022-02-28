@props(['post' =>$post])

<div class="card border-left-info shadow h-100 py-2 mt-5  ">
          
    <div class="card-header "> 
   
          <a href="{{ route('users.posts',$post->user) }}" class="text-lg font-weight-bold text-info">{{ $post->user->name }} </a><span class="text-gray-500">{{ $post->created_at->diffForHumans() }}</span>
        
          
    </div>

    <div class="card-body">
        <div>{{ $post->body }}</div>
    </div>


 
    @auth
      <div class="card-footer d-flex">
        @if (!$post->likedBy(auth()->user()))
        <form action="{{ route('posts.likes', $post) }}" method="post">
          @csrf
          <button type="submit " class="btn btn-sm btn-primary mr-2">Like</button>
        </form>


            
        @else
            
        <form action="{{ route('posts.likes', $post) }}" method="post">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-sm btn-primary mr-2">Unlike</button>
        </form>
      

        @endif
      
      
        <span >{{ $post->likes->count() }} {{ Str::plural('like',$post->likes->count()) }}</span>


      
          <form action="{{ route('posts.destroy', $post) }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-sm btn-danger ml-2">delete</button>
          </form>
      
        {{-- <span >{{ $post->likes->user->name }} Likes</span> --}}
      </div>
    @endauth
        
 

 </div>