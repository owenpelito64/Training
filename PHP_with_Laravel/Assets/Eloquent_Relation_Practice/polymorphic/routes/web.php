<?php

use Illuminate\Support\Facades\Route;
use App\Models\Staff;
use App\Models\Photo;
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

//CREATE
Route::get('/create/{photo}', function ($photo) {
  $staff = Staff::find(1);
  $staff->photos()->create(['path'=>$photo]);
  return ('Created successfully');
});


//READ
Route::get('/read', function () {
  $staff = Staff::find(1);

  foreach($staff->photos as $photo){
    echo $photo->path;
  }
});
//Update
Route::get('/update/{id}/{update}', function ($id,$update) {
  $staff = Staff::findOrFail(1);

  $photo = $staff->photos()->whereId($id)->first();
  $photo->path = $update;
  $photo->save();
  return ('updated successfully');
});

//Delete
Route::get('/delete/{id}', function ($id) {
  $staff = Staff::findOrFail(1);
  $staff->photos()->whereId($id)->delete();
  return ('deleted successfully');
});

//Assign
Route::get('/assign', function () {
  $staff = Staff::findOrFail(2);
  $photo = Photo::findOrFail(4);
  $staff->photos()->save($photo);
 
});
//Un-Assign
Route::get('/un-assign', function () {
  $staff = Staff::findOrFail(1);
   $staff->photos()->whereId(4)->update(['imageable_id'=>'', 'imageable_type'=>'']);

});





