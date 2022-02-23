# Section 30 Creating New App

**Mutators**

- **WORK FLOW**

- create proj setup template setup database setup Authentication

**Middleware Route**

- Gets Authentication before proceding to route

```php

 Route::middleware('auth')->group(function(){

    Route::get('/admin', [App\Http\Controllers\AdminsController::class, 'index'])->name('admin.index');

```

});

**Factory with relation**

```

$ php artisan make:factory PostFactory --model=Post

```

```php

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

            'title' => $this->faker->sentence,
            'body' => $this->faker->sentence,
            'post_image' => $this->faker->imageUrl('900','300'),
            //
        ];
    }
}


```

```php

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Post;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

      $user = User::factory(2)
        ->has(Post::factory())
        ->create();




    }
}

```

**CRUD WORKFLOW**

- [x] CREATE

```php


    public function store(Request $request)
    {

       $input = $request->validate([
            'title' => 'required',
            'post_image' => 'required',
            'body' => 'required',

        ]);

        auth()->user()->posts()->create($input);
        session()->flash('post-create-message', 'Post was Created');
        return redirect()->route('post.view');


    }


```

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
- [x] DELETE

```php

    public function destroy(Post $post)
    {
       $post->delete();
       Session::flash('message', 'Post was deleted');
       return back();


    }
```
