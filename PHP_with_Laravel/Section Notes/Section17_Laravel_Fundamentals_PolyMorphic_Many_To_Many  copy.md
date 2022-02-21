# Section 17 PolyMorphic Many to Many CRUD EXERCISE

Laravel 8 Accessing Controller:Class

```php
//OLD:
Route::resource('/posts','PostsController');

//NEW:

Route::resource('/posts',PostsController::class);

```

**CSRF PROTECTION**

- Cross-site request forgeries are a type of malicious exploit whereby unauthorized commands are performed on behalf of an authenticated user.

**Preventing CSRF Requests**

- Laravel automatically generates a CSRF "token" for each active user session managed by the application. This token is used to verify that the authenticated user is the person actually making the requests to the application. Since this token is stored in the user's session and changes each time the session is regenerated, a malicious application is unable to access it.

```php

///The current session's CSRF token can be accessed via the request's session or via the csrf_token helper function:

use Illuminate\Http\Request;

Route::get('/token', function (Request $request) {
    $token = $request->session()->token();

    $token = csrf_token();

    // ...
});

```
