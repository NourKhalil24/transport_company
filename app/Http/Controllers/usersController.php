<?php

namespace App\Http\Controllers;
use App\Models\User;

class userssController extends Controller
{
    
    

    public function show(){
        $user=User::select('id','first_name','middle_name','last_name','birthday','phone_number','email','password','user_name','remember_token')->get();
        return view('user.show',compact( 'user'));
    }
    }