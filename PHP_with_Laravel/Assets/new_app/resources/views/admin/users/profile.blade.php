<x-admin_master>




 @section('content')

 <div class="d-flex align-items-center">
        <div class="pr-5">
            <h1>Profile:</h1>
            <h1>{{$user->name}} </h1> 
     
        </div>

        <div class="">
            <img style="width: 20%" class="img img-profile rounded-circle" src="{{ $user->avatar }}" alt=" profile">
            

        </div>

   
 </div>
       
 <hr>
    <div class="row">
        <div class="col-sm-6">
            <form action="{{ route('user.profile.update', $user) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                
              
                <label for="ProfilePict">Update Profile Pict</label>
                <div class="form-group">
                   
                    <input type="file" name="avatar">
                   
                </div>
               
                <div class="form-group">
                    <label for="username">username</label>
                    <input type="text" 
                            name="username"
                            class="form-control"
                            id="username"
                            aria-describedby=""
                            placeholder=""
                            value="{{ $user->username }}"> 
               
                            @error('username')
                                <div class="alert alert-danger"{{ $message }}></div>
                            @enderror
                </div>
                 <div class="form-group">
                    <label for="name">name</label>
                    <input type="text" 
                            name="name"
                            class="form-control"
                            id="name"
                            aria-describedby=""
                            placeholder=""
                            value="{{ $user->name }}"> 

                            @error('name')
                            <div class="alert alert-danger"{{ $message }}></div>
                        @enderror
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" 
                            name="email"
                            class="form-control"
                            id="name"
                            aria-describedby=""
                            placeholder=""
                            value="{{ $user->email }}"> 

                            @error('email')
                            <div class="alert alert-danger"{{ $message }}></div>
                        @enderror
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" 
                            name="password"
                            class="form-control"
                            id="password"
                            placeholder=""
                           > 
                    
                           @error('password')
                           <div class="alert alert-danger"{{ $message }}></div>
                       @enderror
                           
                </div>
                <div class="form-group">
                    <label for="password-confirm">Confirm Password</label>
                    <input type="password" 
                            name="password_confirmation"
                            class="form-control"
                            id="password-confirm"
                            placeholder=""
                           > 
                           @error('password_confirmation')
                           <div class="alert alert-danger"{{ $message }}></div>
                       @enderror

                           
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

 @endsection

</x-admin_master>