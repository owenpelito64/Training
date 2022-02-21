@extends('layouts.app')


@section('content')
<h1>Create post</h1>

 <form method="post" action="/post">
        <input type="text" name="title" placeholder="Enter Title">
        <input type="submit" name="submit">

 </form>

<hr>


 <form action="/uploadfile" method="post" enctype="multipart/form-data">
       @csrf
       <div class="form-group">
           <input type="file" class="form-control-file" name="fileToUpload" id="exampleInputFile">
       </div>
       <button type="submit" class="btn btn-primary">Submit</button>
   </form>


@endsection