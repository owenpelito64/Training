# Section 4 Notes

**Serving**

1.  php artisan serve : this is using the built in server in php.
2.  Laravel Homestead : is a virtual environment using vagrant & VirtualBox.
3.  Valet : this is for MAC.

## Routes

- Route parameters are always encased within {} braces and should consist of alphabetic characters. Underscores (\_) are also acceptable within route parameter names. Route parameters are injected into route callbacks / controllers based on their order - the names of the route callback / controller arguments do not matter.

**naming routes**

- Named routes allow the convenient generation of URLs or redirects for specific routes. You may specify a name for a route by chaining the name method onto the route definition:

> !!Route names should always be unique.

## Files in Laravel

**App**

- main folder for the application

**Config**

- This where we keep the configurations

**Database**

- This where we keep migrations, create tables , managing tables

**Public**

- Main public area for you app

**Routes**

- this where you create routes for your app

**.env**

- This is where we keep our sensitive info. such as database info , aws info , etc.

##### Cheat Sheets

[Laravel 8](https://learninglaravel.net/cheatsheet/)
