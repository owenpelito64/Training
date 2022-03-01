<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    public function show(User $user){


        return view('admin.users.profile', ['user'=>$user] );

    }

    public function update(User $user){

        $input = request()->validate([
            'username'=>['required','string', 'max:255','alpha_dash'],
            'name'=>['required','string', 'max:255'],
            'email'=>['required','email', 'max:255'],
            'avatar'=>['file'],
            // 'password'=>['min:6', 'max:255','confirmed'],
        ]);


        if(request('avatar')){
            $input['avatar'] = request('avatar')->store('images');
        }

        $user->update($input);


        return back();

    }

  


       
}
