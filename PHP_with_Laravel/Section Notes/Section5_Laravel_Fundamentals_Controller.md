# Section 5 Notes

## Controllers

**Creating Controller**

- php artisan make:controller 'Name_of_The_Controller' :: This is the recommended rather than creating it manually meaning right clicking and creating new file.

- php artisan make:controller --resource 'Name_of_The_Controller' :: with the resource it automatically creates a CRUD functionalities.

> CRUD - Create , Read , Update , Delete

**namespace**

- it allows us use the same function name / class name in different parts in the same application without causing any problems.

**use**

- Is to import specific class to use its functionality

**Resources**

- is a special static function that will automatically gives us access to different types of routes.

##### Commands

- Route::get('/post', 'Postscontroller@index');

  > Check the version of the laravel
  > Route::get('/post', [PostsController::class, 'index']); use this instead

  [Refer to this documentation if ever get lost/stuck](https://laravel.com/docs/9.x/routing)

##### Cheat Sheets

[Laravel 8](https://learninglaravel.net/cheatsheet/)

##### TODO


- [ ] Review more about Route Parameters
