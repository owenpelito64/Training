# Section 10 Eloquent/ORM

- Laravel includes Eloquent, an object-relational mapper (ORM) that makes it enjoyable to interact with your database. When using Eloquent, each database table has a corresponding "Model" that is used to interact with that table.
<hr>

#### Table Names

> you may have noticed that we did not tell Eloquent which database table corresponds to our Flight model. By convention, the "snake case", plural name of the class will be used as the table name unless another name is explicitly specified. So, in this case, Eloquent will assume the Flight model stores records in the flights table, while an AirTrafficController model would store records in an air_traffic_controllers table.

```php

{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'table name';
}

```

#### Primary Keys

> Eloquent will also assume that each model's corresponding database table has a primary key column named id. If necessary, you may define a protected $primaryKey property on your model to specify a different column that serves as your model's primary key:

```php
{
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'name_of_the_primary_key';
}
```

#### Soft Deleting

> When models are soft deleted, they are not actually removed from your database. Instead, a deleted_at attribute is set on the model indicating the date and time at which the model was "deleted".
>
> > To enable soft deletes for a model, add the Illuminate\Database\Eloquent\SoftDeletes trait to the model:

```
use Illuminate\Database\Eloquent\SoftDeletes;

class Flight extends Model
{
    use SoftDeletes;
}
```

<hr>
> [Refer to this ELOQUENT documentation](https://laravel.com/docs/9.x/eloquent)
