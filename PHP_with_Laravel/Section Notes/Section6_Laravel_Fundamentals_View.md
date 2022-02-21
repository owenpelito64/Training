# Section 6 Notes

## Blade

- Blade is the simple, yet powerful templating engine that is included with Laravel.

## Passing Data to View

- public function show_post($id)
    {
        return view('post')->with('id',$id);
  }
  > can be messy use compact instead for multiple parameters.
- {
  return view('post',compact('id'));
  }

##### Commands

```php
- {{}} use this instead of <?php echo " ">

```

[Refer to this View documentation if ever get lost/stuck](https://laravel.com/docs/9.x/views)

##### Cheat Sheets

[Laravel 8](https://learninglaravel.net/cheatsheet/)
