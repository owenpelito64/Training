# Section 27

- While Laravel does not dictate which JavaScript or CSS pre-processors you use, it does provide a basic starting point using Bootstrap, React, and / or Vue that will be helpful for many applications. By default, Laravel uses NPM to install both of these frontend packages.

- The Bootstrap and Vue scaffolding provided by Laravel is located in the laravel/ui Composer package, which may be installed using Composer:

```php

$composer require laravel/ui:^2.4
// / Generate basic scaffolding...
$php artisan ui bootstrap
$php artisan ui vue
$php artisan ui react

// Generate login / registration scaffolding...
$php artisan ui bootstrap --auth
$php artisan ui vue --auth
$php artisan ui react --auth
```

# Skipped SECTIONS

<!-- TODO Find similar topics if this is not discuss on the new version starting on section 27 -->

- [ ] section 22 - Form Login
- [ ] section 23 - Middleware security
- [ ] section 24 - Laravel Session
- [ ] section 25 - Laravel Email / Api
- [x] section 26 - Git version control
