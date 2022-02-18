<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Address;
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

Route::get('/', function () {
    return view('welcome');
});


/*
|--------------------------------------------------------------------------
| CRUD WITH ONE-TO-ONE
|--------------------------------------------------------------------------
|
*/
//Create
Route::get('/create/{address}', function ($address) {
    $user = User::findOrFail(1);
    $address = new Address(['address'=>$address]);
    $user->address()->save($address);
    return ('Added address to database: '). $address->address;

});
//Read
Route::get('/read', function(){

    $user = User::findOrFail(1);
    echo $user->address->address;

});
//update
Route::get('/update' ,function(){
$address = Address::whereUserId(1)->first();
$address->address = "Apas Cebu City";
$address->save();
return  ('Updated address to : '). $address->address;
});

//delete
Route::get('/delete', function(){

    $user = User::findOrFail(1); 
    $user->address()->delete();
    return ('Deleted');
});
