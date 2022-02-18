<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Role;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



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