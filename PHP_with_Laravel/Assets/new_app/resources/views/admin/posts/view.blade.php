<x-admin_master>
   

    @section('content')
    
    <div class="col-12">
   
      <h1>All post</h1>


    @if (Session::has('message'))
        
    <div class="alert alert-danger">
      {{Session::get('message')}}
    </div>
      @elseif(session('post-create-message'))
      <div class="alert alert-success">{{Session::get('post-create-message')}}</div>
   
   
  

    @endif

    <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Owner</th>
                  <th>Title</th>
                  <th>Image</th>
                  <th>Created at</th>
                  <th>Updated at</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Id</th>
                  <th>Owner</th>
                  <th>Title</th>
                  <th>Image</th>
                  <th>Created at</th>
                  <th>Delete</th>
                </tr>
              </tfoot>
              <tbody>

                @foreach ($posts as $post)
                <tr>
                  <td>{{$post->id}}</td>
                  <td>{{$post->user->name}}</td>
                  <td>{{$post->title}}</td>
                  <td><img height="40px" src="{{$post->post_image}}" alt=""></td>
                  <td>{{$post->created_at}}</td>
                  <td>{{$post->updated_at}}</td>
                  <td>
                    <form method="post" action="{{route('post.destroy', $post->id)}}">
                      @csrf
                      @method('DELETE')
                      <button class="btn btn-danger">Delete</button></td>
                    </form>
                    
                    
                  
                </tr>
                @endforeach
                
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    @endsection


    @section('scripts')
          <!-- Page level plugins -->
            <script src="{{asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
            <script src="{{asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

            <!-- Page level custom scripts -->
            <script src="{{asset('js/demo/datatables-demo.js')}}"></script>
    @endsection
</x-admin_master>