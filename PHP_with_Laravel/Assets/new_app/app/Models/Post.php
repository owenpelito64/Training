<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Post extends Model
{
    use HasFactory;


    protected $fillable = [
        'title',
        'body',
        'post_image'
    
    ];

    public function user(){

        return $this->belongsTo(User::class);
    }


    // mutator
    // public function setPostImageAttribute($value){
    //     $this->attributes['post_image'] = asset($value);
    // }


    // accessor
    // public function getPostImageAttribute($value){
    //     return asset($value);
    // }

    
}
