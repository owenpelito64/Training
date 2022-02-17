@extends('layouts.app')



@section('content')
    
    <div class="container">
        <h1>This is the contact page</h1>
  
        
<!--   If people has data proceed to for loop        -->
        @if (count($people))
            <ul>

<!--   list Every person on the people data until 0      -->
            @foreach ($people as $person)
                <li>{{$person}}</li>
            @endforeach
           </ul>   
        @endif
    </div>

<script>alert('This is an alert')</script>

@endsection