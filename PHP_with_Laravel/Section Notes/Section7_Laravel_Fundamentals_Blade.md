# Section 7 Notes

**Yield**

- is principally used to define a section in a layout and is constantly used to get content from a child page unto a master page.

**Extend**

- extend a Blade layout simply override sections from the layout. Content of the layout can be included in a child view using the @parent directive in a section, allowing you to append to the contents of a layout section such as a sidebar or footer.

**Section**

- directive is inject content layout from extended blade layout and display in child blade.

#### Blade Commands

##### If statements

```php
If Statements
  @if (count($records) === 1)
    I have one record!
@elseif (count($records) > 1)
  I have multiple records!
  @else
  I don't have any records!
  @endif

@unless (Auth::check())
You are not signed in.
@endunless

```

##### Loops

```php
@for ($i = 0; $i < 10; $i++)
  The current value is {{ $i }}
  @endfor

@foreach ($users as $user)

<p>This is user {{ $user->id }}</p>
@endforeach

@forelse($users as $user)

<li>{{ $user->name }}</li>
@empty
<p>No users</p>
@endforelse

@while (true)

<p>I'm looping forever.</p>
@endwhile
```

###### Comments

```php

 {{-- This comment will not be in the rendered HTML --}}

```

[Refer to this Blade template documentation if ever get lost/stuck](https://laravel.com/docs/5.0/templates)

##### Cheat Sheets

[Laravel 8](https://learninglaravel.net/cheatsheet/)
