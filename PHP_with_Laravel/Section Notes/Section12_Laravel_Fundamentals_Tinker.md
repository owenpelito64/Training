# Section 12 Tinker Tool

**Tinker**

- Laravel Tinker is a powerful REPL for the Laravel framework, powered by the PsySH package.
  Tinker allows you to interact with your entire Laravel application on the command line, including your Eloquent models, jobs, events, and more. To enter the Tinker environment, run the tinker Artisan command:

### Simple Activity

```php

$ php artisan tinker
Psy Shell v0.11.1 (PHP 8.1.1 — cli) by Justin Hileman
>>> $post = App
PHP Parse error: Unexpected character "" (ASCII 31) on line 1
>>> $post = App\Models\Post::create(['title'=>'PHP post from tinker' , 'body'=>'This is body']) ;
=> App\Models\Post {#3521
     title: "PHP post from tinker",
     body: "This is body",
     updated_at: "2022-02-18 03:50:49",
     created_at: "2022-02-18 03:50:49",
     id: 3,
   }
>>> $post = new App\Models\Post
=> App\Models\Post {#3519}
>>> $post->title = "New title from this object"
=> "New title from this object"
>>> $post->body = "This is new content 2"
=> "This is new content 2"
>>> $post
=> App\Models\Post {#3519
     title: "New title from this object",
     body: "This is new content 2",
   }
>>> $post->save();
=> true
>>> $post
=> App\Models\Post {#3519
     title: "New title from this object",
     body: "This is new content 2",
     updated_at: "2022-02-18 03:57:01",
     created_at: "2022-02-18 03:57:01",
     id: 4,
   }
>>> $post = App\Models\find(6);
PHP Error:  Call to undefined function App\Models\find() in Psy Shell code on line 1
>>> $post = App\Models\Post::find(6);
=> null
>>> $post = App\Models\Post::find(3);
=> App\Models\Post {#3536
     id: 3,
     title: "PHP post from tinker",
     body: "This is body",
     created_at: "2022-02-18 03:50:49",
     updated_at: "2022-02-18 03:50:49",
     is_admin: 0,
     deleted_at: null,
   }
>>> $post
=> App\Models\Post {#3536
     id: 3,
     title: "PHP post from tinker",
     body: "This is body",
     created_at: "2022-02-18 03:50:49",
     updated_at: "2022-02-18 03:50:49",
     is_admin: 0,
     deleted_at: null,
   }
>>> $post->delete()
=> true
>>> $post
=> App\Models\Post {#3536
     id: 3,
     title: "PHP post from tinker",
     body: "This is body",
     created_at: "2022-02-18 03:50:49",
     updated_at: "2022-02-18 04:04:25",
     is_admin: 0,
     deleted_at: "2022-02-18 04:04:25",
   }
>>> $post->forcedelete()
=> true
>>> $post
=> App\Models\Post {#3536
     id: 3,
     title: "PHP post from tinker",
     body: "This is body",
     created_at: "2022-02-18 03:50:49",
     updated_at: "2022-02-18 04:04:25",
     is_admin: 0,
     deleted_at: "2022-02-18 04:04:25",
   }
>>> $post = App\Models\Post::onlyTrashed()
=> Illuminate\Database\Eloquent\Builder {#3506}
>>> $post->forcedelete()
=> 0



```

<hr>

[Refer to this ELOQUENT Relationship documentation](https://laravel.com/docs/9.x/eloquent-relationships)


