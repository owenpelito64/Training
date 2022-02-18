# Section 15 Many to Many CRUD EXERCISE

**Syncing Associations**

- You may also use the sync method to construct many-to-many associations. The sync method accepts an array of IDs to place on the intermediate table. Any IDs that are not in the given array will be removed from the intermediate table. So, after this operation is complete, only the IDs in the given array will exist in the intermediate table.

**Attaching / Detaching**

- Eloquent also provides methods to make working with many-to-many relationships more convenient. For example, let's imagine a user can have many roles and a role can have many users. You may use the attach method to attach a role to a user by inserting a record in the relationship's intermediate table.

```php

/*
|--------------------------------------------------------------------------
| MANY TO MANY CRUD
|--------------------------------------------------------------------------
|
*/

//CREATE
Route::get('/create', function () {
 $user = User::find(1);
 $user->roles()->save(new Role(['name'=>'Admin']));

 return ('Successfully created');
});
//READ
Route::get('/read', function () {
    $user = User::findOrFail(1);
    foreach ($user->roles as $role){
        echo $role->name;
    }
});
//UPDATE
Route::get('/update', function () {
    $user = User::findOrFail(1);

    if($user->has('roles')){

        foreach($user->roles as $role){

            if($role->name == 'Admin'){
                $role->name = "Subscriber";
                $role->save();
                return ('Updated!!');
            }

        }
    }

});
//DELETE
Route::get('/delete/{id}', function($id){
$user = User::findOrFail(1);
foreach ($user->roles as $role) {
    $role->whereId($id)->delete();
}
// $user->roles()->delete();
});


//Create an role record then attach to user
Route::get('/attach', function(){

    $user = User::findOrFail(1);
    $user->roles()->attach(3);
});

//delete an role record then detach to user
Route::get('/detach', function(){

    $user = User::findOrFail(1);
    $user->roles()->detach(3);
});

//
Route::get('/sync', function(){

    $user = User::findOrFail(1);
    $user->roles()->sync([1,2,3]);
});


```
