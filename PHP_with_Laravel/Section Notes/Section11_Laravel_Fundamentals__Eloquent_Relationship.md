# Section 11 Eloquent/ORM

- Laravel includes Eloquent, an object-relational mapper (ORM) that makes it enjoyable to interact with your database. When using Eloquent, each database table has a corresponding "Model" that is used to interact with that table.
<hr>

**One to One**

- A one-to-one relationship is a very basic type of database relationship. When one table refers to single row in another table that is called a one-to-one relationship. There should only be one matching record found in another table where you have one-to-one relationship defined.

**One to Many**

- A one-to-many relationship is used to define relationships where a single model is the parent to one or more child models.

**Many to Many**

- Many-to-many relations are slightly more complicated than hasOne and hasMany relationships.

**Polymorphic**

- A polymorphic relationship allows the child model to belong to more than one type of model using a single association.

### EXAMPLE POLYMORPHIC RELATIONSHIPS

#### POLYMORPHIC ONE TO ONE

**DATA STRUCTURE**

```php
///


///For example, a blog Post and a User may share a polymorphic relation to an Image model. Using a
///one-to-one polymorphic relation allows you to have a single table of unique images that may be
///associated with posts and users. First, let's examine the table structure:

posts
    id - integer
    name - string

users
    id - integer
    name - string

images
    id - integer
    url - string
    imageable_id - integer
    imageable_type - string



///Note the imageable_id and imageable_type columns on the images table. The imageable_id column will contain the ID value of the post or user, while the imageable_type column will contain the class name of the parent model. The imageable_type column is used by Eloquent to determine which "type" of parent model to return when accessing the imageable relation. In this case, the column would contain either App\Models\Post or App\Models\User.
```

**MODEL STRUCTURE**

```php

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    /**
     * Get the parent imageable model (user or post).
     */
    public function imageable()
    {
        return $this->morphTo();
    }
}

class Post extends Model
{
    /**
     * Get the post's image.
     */
    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }
}

class User extends Model
{
    /**
     * Get the user's image.
     */
    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }
}
```

**RETRIEVING THE RELATIONSHIP**

```php
///Once your database table and models are defined, you may access the relationships via your models. For example, to retrieve the image for a post, we can access the image dynamic relationship property:

use App\Models\Post;

$post = Post::find(1);

$image = $post->image;


///You may retrieve the parent of the polymorphic model by accessing the name of the method that performs the call to morphTo. In this case, that is the imageable method on the Image model. So, we will access that method as a dynamic relationship property:

use App\Models\Image;

$image = Image::find(1);

$imageable = $image->imageable;

///The imageable relation on the Image model will return either a Post or User instance, depending on which type of model owns the image.
```

<hr>

[Refer to this ELOQUENT Relationship documentation](https://laravel.com/docs/9.x/eloquent-relationships)

### TO DO

- [x] PRACTICE MORE OF ELOQUENT RELATIONS
