<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];



    public function user_post(){

        return $this->hasOne('App\Models\Post');
    }

    public function user_posts(){

        return $this->hasMany('App\Models\Post');
    }
   
    public function roles(){
        return $this->belongsToMany('App\Models\Role')->withPivot('created_at');

        // You don't need to define this parameters anymore since you've follow the convention
        // to customize table name and columns follow format below:
        // return $this->belongsTomany('App\Models\Role' , 'user_roles', 'user_id' , 'role_id');


    }
}
