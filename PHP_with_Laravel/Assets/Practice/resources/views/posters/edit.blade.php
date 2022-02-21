@extends('layouts.app')


@section('content')
    <h1>Edit post</h1>

    {{ csrf_field() }}

    <form method="post" action="/post/{{$post->id}}">
        <input type="text" name="title" placeholder="Enter Title" value="{{$post->title}}">
        <input type="hidden" name="_method" value="PUT">
        <input type="submit" name="submit">

    </form>

    <form method="post" action="/post/{{$post->id}}">
        
        <input type="hidden" name="_method" value="DELETE">
        <input type="submit" name="submit" value="DELETE">

    </form>
@endsection