@extends('layouts.blank')

@section('content')
 <!-- Begin Page Content -->
 <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Blank Page</h1>

    <x-post :post="$post" />
  </div>
  <!-- /.container-fluid -->
@endsection
