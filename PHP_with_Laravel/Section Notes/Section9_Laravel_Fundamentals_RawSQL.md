# Section 9 Raw SQL

**CRUD**

```php

 CREATE
   Route::get('/insert', function(){
        DB::insert('insert into post (title, body) values (?, ?)', [ 'PHP with laravel', ' Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, atque!']);
      });

READ
   Route::get('/read', function(){
        $results = DB::select('select * from post');
        foreach ($results as $post){
            return $post->title;
        }
      });

UPDATE
Route::get('/update',function(){
    $update = DB::update('update post set title = "Update title" where id=?', [5]);
    if ($update = 1) {
        return ('IT is now updated');
    }
});


DELETE
Route::get('/delete', function(){
  DB::delete('delete from post  where id=?', [4]);
  return ('DELETED');
});

```
