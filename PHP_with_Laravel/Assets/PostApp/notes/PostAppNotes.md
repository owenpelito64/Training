**MAIL**

-   When building Laravel applications, each type of email sent by your application is represented as a "mailable" class. These classes are stored in the app/Mail directory. Don't worry if you don't see this directory in your application, since it will be generated for you when you create your first mailable class using the make:mail Artisan command:

```php
 $php artisan make:mail Postliked
```

```php
- MAIL_MAILER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=ec4213c7afb9ba
MAIL_PASSWORD=aab73d422ee233
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS="hello@example.com"


```

**Markdown Mailables**

-   Markdown mailable messages allow you to take advantage of the pre-built templates and components of mail notifications in your mailables.

**Generating Markdown Mailables**

-   To generate a mailable with a corresponding Markdown template, you may use the --markdown option of the make:mail Artisan command:

```php
 $php artisan make:mail OrderShipped --markdown=emails.post.post_liked
```

**Writing Markdown Messages**

Markdown mailables use a combination of Blade components and Markdown syntax which allow you to easily construct mail messages while leveraging Laravel's pre-built email UI components:

```php
@component('mail::message')
#Sends the username that liked one of your posts

{{ $liker->name }} liked one of your posts

@component('mail::button', ['url' => route('posts.show', $post)])
View Post
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent

```

# tackled topics

[x] Login
[x] Middleware
[x] Email using laravel
[x] Git
