@extends('layouts.app')


@section('content')
<h1>Create post</h1>

 <form method="post" action="/post">
        <input type="text" name="title" placeholder="Enter Title">
        <input type="submit" name="submit">

 </form>


@endsection