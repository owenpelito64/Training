# Section 20

**Carbon**

```php
Route::get('/dates', function(){
    $date = new DateTime('+1 week');

    echo $date->format('m-d-y');
    echo '<br>';
    echo Carbon::now()->addDays(10)->diffForHumans();
    echo '<br>';
    echo Carbon::now()->subMonths(5)->diffForHumans();
    echo '<br>';
    echo Carbon::now()->yesterday()->diffForHumans();
});
```

**Accessors & Mutators**
-Accessors, mutators, and attribute casting allow you to transform Eloquent attribute values when you retrieve or set them on model instances. For example, you may want to use the Laravel encrypter to encrypt a value while it is stored in the database, and then automatically decrypt the attribute when you access it on an Eloquent model.

```php

// This function reads the user name and displays the name first letter to capital
    public function getNameAttribute($value){

        return strtoupper($value);
    }

// This function update the user name to all capital letters.
  public function setNameAttribute($value){

        $this->attributes['name'] = strtoupper($value);
    }






```

**Global Scopes**

- Global scopes allow you to add constraints to all queries for a given model.

- Writing a global scope is simple. First, define a class that implements the Illuminate\Database\Eloquent\Scope interface. Laravel does not have a conventional location where you should place scope classes, so you are free to place this class in any directory that you wish.

The Scope interface requires you to implement one method: apply. The apply method may add where constraints or other types of clauses to the query as needed:

```php

<?php

namespace App\Scopes;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

class AncientScope implements Scope
{
    /**
     * Apply the scope to a given Eloquent query builder.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $builder
     * @param  \Illuminate\Database\Eloquent\Model  $model
     * @return void
     */
    public function apply(Builder $builder, Model $model)
    {
        $builder->where('created_at', '<', now()->subYears(2000));
    }
}




```

**Applying Global Scopes**
-To assign a global scope to a model, you should override the model's booted method and invoke the model's addGlobalScope method. The addGlobalScope method accepts an instance of your scope as its only argument:

```php
<?php

namespace App\Models;

use App\Scopes\AncientScope;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    /**
     * The "booted" method of the model.
     *
     * @return void
     */
    protected static function booted()
    {
        static::addGlobalScope(new AncientScope);
    }



 //  After adding the scope in the example above to the App\Models\User model, a call to the User::all() method will execute the following SQL query:

select * from `users` where `created_at` < 0021-02-18 00:00:00
```

[x] (https://laravel.com/docs/master/eloquent-mutators#accessors-and-mutators)
