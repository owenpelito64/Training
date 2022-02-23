# Section 30 Creating New App

**WORK FLOW**

- create proj setup template setup database setup Authentication

```

$ php artisan make:factory PostFactory --model=Post

```

**CRUD WORKFLOW**

- [ ] CREATE
- [x] READ

- pass the post model to home controller to pass in Post data

```php


<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

       $posts = Post::all();
        return view('home', ['posts' => $posts]);
    }
}



```

- Go to home view and display the data according to the card

```php


 @foreach ($posts as $post)

      <!-- Blog Post -->
      <div class="card mb-4">
        <img class="card-img-top" src="{{$post->post_image}}" alt="Card image cap">
        <div class="card-body">
          <h2 class="card-title">{{$post->title}}</h2>
          <p class="card-text">{{$post->body}}</p>
          <a href="{{$post->user_id}}" class="btn btn-primary">Read More &rarr;</a>
        </div>
        <div class="card-footer text-muted">
          {{$post->created_at->diffForHumans()}}
          <a href="#">Start Bootstrap</a>
        </div>
      </div>

      @endforeach

```

- [ ] UPDATE
- [ ] DELETE
