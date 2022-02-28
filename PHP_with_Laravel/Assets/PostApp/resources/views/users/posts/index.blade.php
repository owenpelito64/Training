@extends('layouts.blank')

@section('content')
 <!-- Begin Page Content -->
 <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">{{ $user->name }}</h1>
    <h2>Posted: {{ $posts->count() }}
                 {{ Str::plural('post', $posts->count()) }} 
                 and received {{ $user->receivedLikes->count() }}
                 {{ Str::plural('like', $user->receivedLikes->count()) }} </h2>
      
  </div>





  <!-- /.container-fluid -->

<div class="p-3">
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
  
@endsection
